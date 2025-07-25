<?php   

namespace MenyongMenying\MLibrary\Kucil\Http\Request;

use MenyongMenying\MLibrary\Kucil\Http\Request\Contracts\RequestInterface;
use MenyongMenying\MLibrary\Kucil\Http\Request\Types\GetInput;
use MenyongMenying\MLibrary\Kucil\Http\Request\Types\JsonInput;
use MenyongMenying\MLibrary\Kucil\Http\Request\Types\PostInput;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;
use MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject;
use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;
use MenyongMenying\MLibrary\Kucil\Utilities\Json\Json;
use MenyongMenying\MLibrary\Kucil\Systems\File\File;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class Request implements RequestInterface
{
    /**
     * Objek dari class 'MString'.
     * @var MString 
     */
    private MString $string;

    /**
     * Objek dari class 'MObject'.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MObject\MObject 
     */
    private MObject $object;

    /**
     * Objek dari class 'Json'.
     * @var Json 
     */
    private Json $json;

    /**
     * Objek dari class 'File'.
     * @var File 
     */
    private File $file;

    /**
     * Objek dari class 'JsonInput'.
     * @var JsonInput 
     */
    private JsonInput $jsonInput;

    /**
     * Objek dari class 'GetInput'.
     * @var GetInput 
     */
    private GetInput $getInput;

    /**
     * Objek dari class 'PostInput'.
     * @var PostInput 
     */
    private PostInput $postInput;

    public function __construct(MString $string, MObject $object, Json $json, File $file)
    {
        $this->string = $string;
        $this->object = $object;
        $this->json = $json;
        $this->file = $file;
        $this->jsonInput = new JsonInput($this->string, $this->object, $this->json, $this->file);
        $this->getInput = new GetInput($this->object);
        $this->postInput = new PostInput($this->object);
        return;
    }

    public function json() :null|Data
    {
        return $this->jsonInput->getDataInput();
    }

    public function get() :null|Data
    {
        return $this->getInput->getDataInput();
    }

    public function post() :null|Data
    {
        return $this->postInput->getDataInput();
    }
}