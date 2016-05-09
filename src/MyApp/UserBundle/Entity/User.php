<?php


namespace MyApp\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\ElasticaBundle\Configuration\Search;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
     public function __construct()
    {
        parent::__construct();
        
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255, nullable=true)
     */
    protected $facebookId;
    
    
 
    
public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setSurname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */
    protected $content;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
     protected $createdAt;
    
    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setContent($content) {
        $this->content = $content;
    }

       

    /**
     * @ORM\Column(name="published_at", type="datetime", nullable=true)
     */
    protected $publishedAt;

    /**
    * @ORM\PrePersist
    */
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    function getDescription() {
        return $this->description;
    }

    function setDescription($description) {
        $this->description = $description;
    }

       function getCreatedAt() {
       return $this->createdAt;
   }

   function getPublishedAt() {
       return $this->publishedAt;
   }

   function setCreatedAt($createdAt) {
       $this->createdAt = $createdAt;
   }

   function setPublishedAt($publishedAt) {
       $this->publishedAt = $publishedAt;
   }

       public function prePersist()
    {
        $this->createdAt = new \DateTime();
    }

    public function isPublished()
    {
        return (null !== $this->getPublishedAt());
    }

    

   
/**
     * @var string $image
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    
    
     public $file;
  protected function getUploadDir()
    {
        return 'image';
    }
     
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir()."/".$this->getId()."/";
    }
     
    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().$this->getId()."/".'/'.$this->image;
    }
     
    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().$this->getId()."/".'/'.$this->image;
    }
    
 /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
         if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->image = uniqid().'.'.$this->file->guessExtension();
          }
    }
    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function upload()
    {
         if (null === $this->file) {
            return;
          }
         
          // if there is an error when moving the file, an exception will
          // be automatically thrown by move(). This will properly prevent
          // the entity from being persisted to the database on error
          $this->file->move($this->getUploadRootDir(), $this->image);
         
          unset($this->file);
    }
/**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsolutePath1();
    }
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }

   

      

    /**
     * Set image
     *
     * @param string $image
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    function getId() {
        return $this->id;
    }

    function getFile() {
        return $this->file;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFile($file) {
        $this->file = $file;
    }


}
