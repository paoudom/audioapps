<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AudioappRepository")
 */
class Audioapp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="audioapps")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;


    /**
     * @ORM\Column(type="integer")
     */
    private $appid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $au;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $iaa;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ab;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $softdescription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $manual;

	
	/**
     * @ORM\Column(type="array", nullable=true)
     */
    private $screenshotUrls = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $ipadScreenshotUrls = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $appletvScreenshotUrls = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artworkUrl60;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artworkUrl512;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artworkUrl100;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artistViewUrl;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $advisories = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $supportedDevices = [];

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $averageUserRatingForCurrentVersion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trackCensoredName;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $fileSizeBytes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sellerUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contentAdvisoryRating;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $userRatingCountForCurrentVersion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trackViewUrl;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $currentVersionReleaseDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sellerName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $releaseDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $primaryGenreName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $releaseNotes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $formattedPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $minimumOsVersion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $currency;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $version;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trackName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artistName;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bundleId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $trackId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $averageUserRating;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userRatingCount;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $formattedPriceEuro;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $priceEuro;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionFR;	
	
	


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppid(): ?int
    {
        return $this->appid;
    }

    public function setAppid(int $appid): self
    {
        $this->appid = $appid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAu(): ?bool
    {
        return $this->au;
    }

    public function setAu(?bool $au): self
    {
        $this->au = $au;

        return $this;
    }

    public function getIaa(): ?bool
    {
        return $this->iaa;
    }

    public function setIaa(?bool $iaa): self
    {
        $this->iaa = $iaa;

        return $this;
    }

    public function getAb(): ?bool
    {
        return $this->ab;
    }

    public function setAb(?bool $ab): self
    {
        $this->ab = $ab;

        return $this;
    }

    public function getLink(): ?bool
    {
        return $this->link;
    }

    public function setLink(?bool $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getSoftdescription(): ?string
    {
        return $this->softdescription;
    }

    public function setSoftdescription(?string $softdescription): self
    {
        $this->softdescription = $softdescription;

        return $this;
    }

    public function getManual(): ?string
    {
        return $this->manual;
    }

    public function setManual(?string $manual): self
    {
        $this->manual = $manual;

        return $this;
    }

	
	public function getScreenshotUrls(): ?array
    {
        return $this->screenshotUrls;
    }

    public function setScreenshotUrls(?array $screenshotUrls): self
    {
        $this->screenshotUrls = $screenshotUrls;

        return $this;
    }

    public function getIpadScreenshotUrls(): ?array
    {
        return $this->ipadScreenshotUrls;
    }

    public function setIpadScreenshotUrls(?array $ipadScreenshotUrls): self
    {
        $this->ipadScreenshotUrls = $ipadScreenshotUrls;

        return $this;
    }

    public function getAppletvScreenshotUrls(): ?array
    {
        return $this->appletvScreenshotUrls;
    }

    public function setAppletvScreenshotUrls(?array $appletvScreenshotUrls): self
    {
        $this->appletvScreenshotUrls = $appletvScreenshotUrls;

        return $this;
    }

    public function getArtworkUrl60(): ?string
    {
        return $this->artworkUrl60;
    }

    public function setArtworkUrl60(?string $artworkUrl60): self
    {
        $this->artworkUrl60 = $artworkUrl60;

        return $this;
    }

    public function getArtworkUrl512(): ?string
    {
        return $this->artworkUrl512;
    }

    public function setArtworkUrl512(?string $artworkUrl512): self
    {
        $this->artworkUrl512 = $artworkUrl512;

        return $this;
    }

    public function getArtworkUrl100(): ?string
    {
        return $this->artworkUrl100;
    }

    public function setArtworkUrl100(?string $artworkUrl100): self
    {
        $this->artworkUrl100 = $artworkUrl100;

        return $this;
    }

    public function getArtistViewUrl(): ?string
    {
        return $this->artistViewUrl;
    }

    public function setArtistViewUrl(?string $artistViewUrl): self
    {
        $this->artistViewUrl = $artistViewUrl;

        return $this;
    }

    public function getAdvisories(): ?array
    {
        return $this->advisories;
    }

    public function setAdvisories(?array $advisories): self
    {
        $this->advisories = $advisories;

        return $this;
    }

    public function getSupportedDevices(): ?array
    {
        return $this->supportedDevices;
    }

    public function setSupportedDevices(?array $supportedDevices): self
    {
        $this->supportedDevices = $supportedDevices;

        return $this;
    }

    public function getAverageUserRatingForCurrentVersion(): ?float
    {
        return $this->averageUserRatingForCurrentVersion;
    }

    public function setAverageUserRatingForCurrentVersion(?float $averageUserRatingForCurrentVersion): self
    {
        $this->averageUserRatingForCurrentVersion = $averageUserRatingForCurrentVersion;

        return $this;
    }

    public function getTrackCensoredName(): ?string
    {
        return $this->trackCensoredName;
    }

    public function setTrackCensoredName(?string $trackCensoredName): self
    {
        $this->trackCensoredName = $trackCensoredName;

        return $this;
    }

    public function getFileSizeBytes(): ?float
    {
        return $this->fileSizeBytes;
    }

    public function setFileSizeBytes(?float $fileSizeBytes): self
    {
        $this->fileSizeBytes = $fileSizeBytes;

        return $this;
    }

    public function getSellerUrl(): ?string
    {
        return $this->sellerUrl;
    }

    public function setSellerUrl(?string $sellerUrl): self
    {
        $this->sellerUrl = $sellerUrl;

        return $this;
    }

    public function getContentAdvisoryRating(): ?string
    {
        return $this->contentAdvisoryRating;
    }

    public function setContentAdvisoryRating(?string $contentAdvisoryRating): self
    {
        $this->contentAdvisoryRating = $contentAdvisoryRating;

        return $this;
    }

    public function getUserRatingCountForCurrentVersion(): ?float
    {
        return $this->userRatingCountForCurrentVersion;
    }

    public function setUserRatingCountForCurrentVersion(?float $userRatingCountForCurrentVersion): self
    {
        $this->userRatingCountForCurrentVersion = $userRatingCountForCurrentVersion;

        return $this;
    }

    public function getTrackViewUrl(): ?string
    {
        return $this->trackViewUrl;
    }

    public function setTrackViewUrl(?string $trackViewUrl): self
    {
        $this->trackViewUrl = $trackViewUrl;

        return $this;
    }

    public function getCurrentVersionReleaseDate(): ?\DateTimeInterface
    {
        return $this->currentVersionReleaseDate;
    }

    public function setCurrentVersionReleaseDate(?\DateTimeInterface $currentVersionReleaseDate): self
    {
        $this->currentVersionReleaseDate = $currentVersionReleaseDate;

        return $this;
    }

    public function getSellerName(): ?string
    {
        return $this->sellerName;
    }

    public function setSellerName(?string $sellerName): self
    {
        $this->sellerName = $sellerName;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getPrimaryGenreName(): ?string
    {
        return $this->primaryGenreName;
    }

    public function setPrimaryGenreName(?string $primaryGenreName): self
    {
        $this->primaryGenreName = $primaryGenreName;

        return $this;
    }

    public function getReleaseNotes(): ?string
    {
        return $this->releaseNotes;
    }

    public function setReleaseNotes(?string $releaseNotes): self
    {
        $this->releaseNotes = $releaseNotes;

        return $this;
    }

    public function getFormattedPrice(): ?string
    {
        return $this->formattedPrice;
    }

    public function setFormattedPrice(?string $formattedPrice): self
    {
        $this->formattedPrice = $formattedPrice;

        return $this;
    }

    public function getMinimumOsVersion(): ?string
    {
        return $this->minimumOsVersion;
    }

    public function setMinimumOsVersion(?string $minimumOsVersion): self
    {
        $this->minimumOsVersion = $minimumOsVersion;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getTrackName(): ?string
    {
        return $this->trackName;
    }

    public function setTrackName(?string $trackName): self
    {
        $this->trackName = $trackName;

        return $this;
    }

    public function getArtistName(): ?string
    {
        return $this->artistName;
    }

    public function setArtistName(?string $artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    public function setBundleId(?string $bundleId): self
    {
        $this->bundleId = $bundleId;

        return $this;
    }

    public function getTrackId(): ?int
    {
        return $this->trackId;
    }

    public function setTrackId(?int $trackId): self
    {
        $this->trackId = $trackId;

        return $this;
    }

    public function getAverageUserRating(): ?string
    {
        return $this->averageUserRating;
    }

    public function setAverageUserRating(?string $averageUserRating): self
    {
        $this->averageUserRating = $averageUserRating;

        return $this;
    }

    public function getUserRatingCount(): ?int
    {
        return $this->userRatingCount;
    }

    public function setUserRatingCount(?int $userRatingCount): self
    {
        $this->userRatingCount = $userRatingCount;

        return $this;
    }

    public function getFormattedPriceEuro(): ?string
    {
        return $this->formattedPriceEuro;
    }

    public function setFormattedPriceEuro(?string $formattedPriceEuro): self
    {
        $this->formattedPriceEuro = $formattedPriceEuro;

        return $this;
    }

    public function getPriceEuro(): ?float
    {
        return $this->priceEuro;
    }

    public function setPriceEuro(?float $priceEuro): self
    {
        $this->priceEuro = $priceEuro;

        return $this;
    }

    public function getDescriptionFR(): ?string
    {
        return $this->descriptionFR;
    }

    public function setDescriptionFR(?string $descriptionFR): self
    {
        $this->descriptionFR = $descriptionFR;

        return $this;
    }
	
	public function isRenseigned(): ?bool
    {
		if(empty($this->getTrackId()))
		{
			return true;
		}
		else
		{
			return false;
		}
        
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Generates the magic method
     * 
     */
    public function __toString(){
        // to show the name of the Category in the select
        return $this->name;
        // to show the id of the Category in the select
        // return $this->id;
    }

    public function newapp(){

        if($this->releaseDate == $this->currentVersionReleaseDate){return true;}
        return false;
    }
}
