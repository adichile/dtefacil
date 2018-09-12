<?php

namespace FR3D\XmlDSig\Adapter;

use DOMDocument;
use DOMNode;
use XMLSecEnc;
use RuntimeException;
use XMLSecurityKey;
use XMLSecurityDSig;
use UnexpectedValueException;

require_once('AdapterInterface.php');
require_once("XMLSecurityDSig.php");
require_once("XMLSecurityKey.php");
require_once("XMLSecEnc.php");

/**
 * XmlDSig adapter based on "xmlseclibs" library
 *
 * http://code.google.com/p/xmlseclibs/
 */
class XmlseclibsAdapter implements AdapterInterface
{
    /**
     * Private key
     *
     * @var string
     */
    protected $privateKey;

    /**
     * Public key
     *
     * @var string
     */
    protected $publicKey;

    /**
     * Signature algorithm URI. By default RSA with SHA1
     *
     * @var string
     */
    protected $keyAlgorithm = self::RSA_SHA1;

    /**
     * Digest algorithm URI. By default SHA1
     *
     * @var string
     * @see AdapterInterface::SHA1
     */
    protected $digestAlgorithm = self::SHA1;

    /**
     * Canonical algorithm URI. By default C14N
     *
     * @var string
     * @see AdapterInterface::XML_C14N
     */
    protected $canonicalMethod = self::XML_C14N;

    /**
     * Transforms list
     *
     * @var array
     * @see AdapterInterface::ENVELOPED
     */
    protected $transforms = array();


    public function setPrivateKey($privateKey, $algorithmType = self::RSA_SHA1)
    {
        $this->privateKey   = $privateKey;
        $this->keyAlgorithm = $algorithmType;

        return $this;
    }

    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    public function getPublicKey(DOMNode $dom = null)
    {
        if ($dom) {
            $this->setPublicKeyFromNode($dom);
        }

        if (!$this->publicKey && $this->privateKey) {
            $this->setPublicKeyFromPrivateKey($this->privateKey);
        }

        return $this->publicKey;
    }

    public function getKeyAlgorithm()
    {
        return $this->keyAlgorithm;
    }

    public function setDigestAlgorithm($algorithmType = self::SHA1)
    {
        $this->digestAlgorithm = $algorithmType;

        return $this;
    }

    public function setCanonicalMethod($methodType = self::XML_C14N)
    {
        $this->canonicalMethod = $methodType;

        return $this;
    }

    public function addTransform($transformType)
    {
        $this->transforms[] = $transformType;

        return $this;
    }

    public function sign(DOMDocument $data, $tipo = "")
    {
        if (null === $this->privateKey) {
            throw new RuntimeException(
                'Missing private key. Use setPrivateKey to set one.'
            );
        }
        
        $objKey = new XMLSecurityKey(
            $this->keyAlgorithm,
            array(
                 'type' => 'private',
            )
        );
        
        if($tipo == "ENVIO"){
            $node = $data->getElementsByTagName("SetDTE")->item(0);    
        }elseif($tipo == "DTE"){
            $node = $data->getElementsByTagName("Documento")->item(0);
        }elseif($tipo == "EXPORTACION"){
            $node = $data->getElementsByTagName("Exportaciones")->item(0);
        }elseif($tipo == "LIQUIDACION"){
            $node = $data->getElementsByTagName("LiquidacionFactura")->item(0);    
        }elseif($tipo == "LIBRO"){
            $node = $data->getElementsByTagName("EnvioLibro")->item(0);    
        }elseif($tipo == "RESPUESTA"){
            $node = $data->getElementsByTagName("Resultado")->item(0);
        }elseif($tipo == "AEC"){
                $appendToNode = $data->getElementsByTagName("AEC")->item(0);
		$node = $data->getElementsByTagName("DocumentoAEC")->item(0);	
        }elseif($tipo == "DocCesion"){
                $appendToNode = $data->getElementsByTagName("Cesion")->item(0);
		$node = $data->getElementsByTagName("DocumentoCesion")->item(0);	
        }elseif($tipo == "DocCedido"){
                $appendToNode = $data->getElementsByTagName("DTECedido")->item(0);
		$node = $data->getElementsByTagName("DocumentoDTECedido")->item(0);	
        }elseif($tipo == "Recibo"){
                $appendToNode = $data->getElementsByTagName("Recibo")->item(0);
		$node = $data->getElementsByTagName("DocumentoRecibo")->item(0);         
        }elseif($tipo == "SetRecibo"){
                $appendToNode = $data->getElementsByTagName("EnvioRecibos")->item(0);
		$node = $data->getElementsByTagName("SetRecibos")->item(0);         
        }    
        
        $objKey->loadKey($this->privateKey);
        $objXMLSecDSig = new XMLSecurityDSig(FALSE);
        $objXMLSecDSig->setCanonicalMethod($this->canonicalMethod);
        if($tipo == "ENVIO" || $tipo == "DTE" || $tipo == "LIBRO" || $tipo == "RESPUESTA" || 
           $tipo == "AEC" || $tipo == "DocCesion" || $tipo == "DocCedido" || 
           $tipo == "Recibo" || $tipo == "SetRecibo" || $tipo == "LIQUIDACION"||
           $tipo == "EXPORTACION"){
        $objXMLSecDSig->addReference($node, $this->digestAlgorithm, $this->transforms, array('force_uri' => TRUE, 'overwrite'=>FALSE, 'id_name'=>'ID'));    
        }else{
        $objXMLSecDSig->addReference($data, $this->digestAlgorithm, $this->transforms, array('force_uri' => TRUE, 'overwrite'=>FALSE));     
        }
        
        if($tipo == "AEC" || $tipo == "DocCesion" || $tipo == "DocCedido" || $tipo == "Recibo" || $tipo == "SetRecibo"){   
            $objXMLSecDSig->sign($objKey, $appendToNode);
        }else{
            $objXMLSecDSig->sign($objKey, $data->documentElement);  
        }
  
        /* Add associated public key */
        if ($this->getPublicKey()) {
            $objXMLSecDSig->add509Cert($this->getPublicKey());
        }
    }

    public function verify(DOMDocument $data)
    {
        $objKey        = null;
        $objXMLSecDSig = new XMLSecurityDSig();
        $objDSig       = $objXMLSecDSig->locateSignature($data);
        if (!$objDSig) {
            throw new UnexpectedValueException('Signature DOM element not found.');
        }
        $objXMLSecDSig->canonicalizeSignedInfo();

        if (!$this->getPublicKey()) {
            // try to get the public key from the certificate
            $objKey = $objXMLSecDSig->locateKey();
            if (!$objKey) {
                throw new RuntimeException(
                    'There is no set either private key or public key for signature verification.'
                );
            }

            XMLSecEnc::staticLocateKeyInfo($objKey, $objDSig);
            $this->publicKey    = $objKey->getX509Certificate();
            $this->keyAlgorithm = $objKey->getAlgorith();
        }

        if (!$objKey) {
            $objKey = new XMLSecurityKey(
                $this->keyAlgorithm,
                array(
                     'type' => 'public',
                )
            );
            $objKey->loadKey($this->getPublicKey());
        }
		
        // Check signature
        if (1 !== $objXMLSecDSig->verify($objKey)) {
            return false;
        }
        // Check references (data)
        try {
            $objXMLSecDSig->validateReference();
        } catch(\Exception $e) {
            return false;
        }

        return true;
    }

    /**
     * Try to extract the public key from DOM node
     *
     * Sets publicKey and keyAlgorithm properties if success.
     *
     * @see publicKey
     * @see keyAlgorithm
     * @param DOMNode $dom
     * @return bool `true` If public key was extracted or `false` if cannot be possible
     */
    protected function setPublicKeyFromNode(DOMNode $dom)
    {
        // try to get the public key from the certificate
        $objXMLSecDSig = new XMLSecurityDSig();
        $objDSig       = $objXMLSecDSig->locateSignature($dom);
        if (!$objDSig) {
            return false;
        }

        $objKey = $objXMLSecDSig->locateKey();
        if (!$objKey) {
            return false;
        }

        XMLSecEnc::staticLocateKeyInfo($objKey, $objDSig);
        $this->publicKey    = $objKey->getX509Certificate();
        $this->keyAlgorithm = $objKey->getAlgorith();
	
        return true;
    }

    /**
     * Try to extract the public key from private key
     *
     * @see publicKey
     * @param string $privateKey
     * @return bool `true` If public key was extracted or `false` if cannot be possible
     */
    protected function setPublicKeyFromPrivateKey($privateKey)
    {
        return openssl_pkey_export(
            openssl_pkey_get_public($privateKey),
            $this->publicKey
        );
    }
}
