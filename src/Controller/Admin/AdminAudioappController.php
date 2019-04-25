<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\Common\Persistence\ObjectManager;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

use App\Repository\AudioappRepository;
use App\Entity\Audioapp;
use App\Form\AudioappType;

class AdminAudioappController extends BaseAdminController
{

    /**
     * @var CategorieRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $om;

    public function __construct(AudioappRepository $repository, ObjectManager $om)
    {
        $this->repository = $repository;
        $this->om = $om;
    }


    public function updateAllAction()
    {


        $audioapps = $this->repository->findAll();

        //Récupération des informations du store
        $url = "http://itunes.apple.com/lookup?id=";
        $france = "&country=FR";


        foreach($audioapps as $audioapp){


            $json = $url . $audioapp->getAppID();
            $json_eur = $url . $audioapp->getAppID() . $france;
            $req = file_get_contents($json);
            $req_eu = file_get_contents($json_eur);
    
            $converted = json_decode($req, true);
            $converted_eu = json_decode($req_eu, true);


            $date = $audioapp->getcurrentVersionReleaseDate();
            $compare = new \DateTime($converted['results'][0]['currentVersionReleaseDate']);

            if($compare > $date){
                if(isset($converted['results'][0]['screenshotUrls'])){
                    $audioapp->setScreenshotUrls($converted['results'][0]['screenshotUrls']);
                }
                if(isset($converted['results'][0]['ipadScreenshotUrls'])){
                    $audioapp->setIpadScreenshotUrls($converted['results'][0]['ipadScreenshotUrls']);
                }
                if(isset($converted['results'][0]['appletvScreenshotUrls'])){
                    $audioapp->setAppletvScreenshotUrls($converted['results'][0]['appletvScreenshotUrls']);
                }           
                if(isset($converted['results'][0]['artworkUrl60'])){
                    $audioapp->setArtworkUrl60($converted['results'][0]['artworkUrl60']);
                } 
                if(isset($converted['results'][0]['artworkUrl512'])){
                    $audioapp->setArtworkUrl512($converted['results'][0]['artworkUrl512']);
                } 
                if(isset($converted['results'][0]['artworkUrl100'])){
                    $audioapp->setArtworkUrl100($converted['results'][0]['artworkUrl100']);
                } 
                if(isset($converted['results'][0]['artistViewUrl'])){
                    $audioapp->setArtistViewUrl($converted['results'][0]['artistViewUrl']);
                }  
                if(isset($converted['results'][0]['advisories'])){
                    $audioapp->setAdvisories($converted['results'][0]['advisories']);
                } 
                if(isset($converted['results'][0]['supportedDevices'])){
                    $audioapp->setSupportedDevices($converted['results'][0]['supportedDevices']);
                }          
                if(isset($converted['results'][0]['averageUserRatingForCurrentVersion'])){
                    $audioapp->setAverageUserRatingForCurrentVersion($converted['results'][0]['averageUserRatingForCurrentVersion']);
                }
                if(isset($converted['results'][0]['trackCensoredName'])){
                    $audioapp->setTrackCensoredName($converted['results'][0]['trackCensoredName']);
                }
                if(isset($converted['results'][0]['fileSizeBytes'])){
                    $audioapp->setFileSizeBytes($converted['results'][0]['fileSizeBytes']);
                }            
                if(isset($converted['results'][0]['sellerUrl'])){
                    $audioapp->setSellerUrl($converted['results'][0]['sellerUrl']);
                }
                if(isset($converted['results'][0]['contentAdvisoryRating'])){
                    $audioapp->setContentAdvisoryRating($converted['results'][0]['contentAdvisoryRating']);
                }   
                if(isset($converted['results'][0]['userRatingCountForCurrentVersion'])){
                    $audioapp->setUserRatingCountForCurrentVersion($converted['results'][0]['userRatingCountForCurrentVersion']);
                }
                if(isset($converted['results'][0]['trackViewUrl'])){
                    $audioapp->setTrackViewUrl($converted['results'][0]['trackViewUrl']);
                }
                if(isset($converted['results'][0]['currentVersionReleaseDate'])){
                    $audioapp->setCurrentVersionReleaseDate(new \DateTime($converted['results'][0]['currentVersionReleaseDate']));
                }
                if(isset($converted['results'][0]['sellerName'])){
                    $audioapp->setSellerName($converted['results'][0]['sellerName']);
                }
                if(isset($converted['results'][0]['releaseDate'])){
                    $audioapp->setReleaseDate(new \DateTime($converted['results'][0]['releaseDate']));
                }
                if(isset($converted['results'][0]['primaryGenreName'])){
                    $audioapp->setPrimaryGenreName($converted['results'][0]['primaryGenreName']);
                }
                if(isset($converted['results'][0]['primaryGenreName'])){
                    $audioapp->setPrimaryGenreName($converted['results'][0]['primaryGenreName']);
                }
                if(isset($converted['results'][0]['releaseNotes'])){
                    $audioapp->setReleaseNotes($converted['results'][0]['releaseNotes']);
                }
                if(isset($converted['results'][0]['formattedPrice'])){
                    $audioapp->setFormattedPrice($converted['results'][0]['formattedPrice']);
                }    
                if(isset($converted_eu['results'][0]['formattedPrice'])){
                    $audioapp->setFormattedPriceEuro($converted_eu['results'][0]['formattedPrice']);
                }
                if(isset($converted['results'][0]['minimumOsVersion'])){
                    $audioapp->setMinimumOsVersion($converted['results'][0]['minimumOsVersion']);
                }
                if(isset($converted['results'][0]['currency'])){
                    $audioapp->setCurrency($converted['results'][0]['currency']);
                }          
                if(isset($converted['results'][0]['version'])){
                    $audioapp->setVersion($converted['results'][0]['version']);
                } 
                if(isset($converted['results'][0]['trackName'])){
                    $audioapp->setTrackName($converted['results'][0]['trackName']);
                }   
                if(isset($converted['results'][0]['artistName'])){
                    $audioapp->setArtistName($converted['results'][0]['artistName']);
                }  
                if(isset($converted['results'][0]['price'])){
                    $audioapp->setPrice($converted['results'][0]['price']);
                }  
                if(isset($converted_eu['results'][0]['price'])){
                    $audioapp->setPriceEuro($converted_eu['results'][0]['price']);
                } 
                if(isset($converted['results'][0]['description'])){
                    $audioapp->setDescription($converted['results'][0]['description']);
                } 
                if(isset($converted_eu['results'][0]['description'])){
                    $audioapp->setDescriptionFR($converted_eu['results'][0]['description']);
                } 
                if(isset($converted['results'][0]['bundleId'])){
                    $audioapp->setBundleId($converted['results'][0]['bundleId']);
                } 
                if(isset($converted['results'][0]['trackId'])){
                    $audioapp->setTrackId($converted['results'][0]['trackId']);
                } 
                if(isset($converted['results'][0]['averageUserRating'])){
                    $audioapp->setAverageUserRating($converted['results'][0]['averageUserRating']);
                } 
                if(isset($converted['results'][0]['userRatingCount'])){
                    $audioapp->setUserRatingCount($converted['results'][0]['userRatingCount']);
                }
    
                $this->em->persist($audioapp);
            }

        }

        $this->em->flush();

        return $this->redirectToRoute('easyadmin', array(
            'action' => 'list',
            'entity' => 'Audioapp',
        ));
    }


    public function updateAction()
    {

        $id = $this->request->query->get('id');

        $audioapp = $audioapps = $this->repository->find($id);
        $url = "http://itunes.apple.com/lookup?id=";
        $france = "&country=FR";

        $json = $url . $audioapp->getAppID();
        $json_eur = $url . $audioapp->getAppID() . $france;
        $req = file_get_contents($json);
        $req_eu = file_get_contents($json_eur);

        $converted = json_decode($req, true);
        $converted_eu = json_decode($req_eu, true);

       
            if(isset($converted['results'][0]['screenshotUrls'])){
                $audioapp->setScreenshotUrls($converted['results'][0]['screenshotUrls']);
            }
            if(isset($converted['results'][0]['ipadScreenshotUrls'])){
                $audioapp->setIpadScreenshotUrls($converted['results'][0]['ipadScreenshotUrls']);
            }
            if(isset($converted['results'][0]['appletvScreenshotUrls'])){
                $audioapp->setAppletvScreenshotUrls($converted['results'][0]['appletvScreenshotUrls']);
            }           
            if(isset($converted['results'][0]['artworkUrl60'])){
                $audioapp->setArtworkUrl60($converted['results'][0]['artworkUrl60']);
            } 
            if(isset($converted['results'][0]['artworkUrl512'])){
                $audioapp->setArtworkUrl512($converted['results'][0]['artworkUrl512']);
            } 
            if(isset($converted['results'][0]['artworkUrl100'])){
                $audioapp->setArtworkUrl100($converted['results'][0]['artworkUrl100']);
            } 
            if(isset($converted['results'][0]['artistViewUrl'])){
                $audioapp->setArtistViewUrl($converted['results'][0]['artistViewUrl']);
            }  
            if(isset($converted['results'][0]['advisories'])){
                $audioapp->setAdvisories($converted['results'][0]['advisories']);
            } 
            if(isset($converted['results'][0]['supportedDevices'])){
                $audioapp->setSupportedDevices($converted['results'][0]['supportedDevices']);
            }          
            if(isset($converted['results'][0]['averageUserRatingForCurrentVersion'])){
                $audioapp->setAverageUserRatingForCurrentVersion($converted['results'][0]['averageUserRatingForCurrentVersion']);
            }
            if(isset($converted['results'][0]['trackCensoredName'])){
                $audioapp->setTrackCensoredName($converted['results'][0]['trackCensoredName']);
            }
            if(isset($converted['results'][0]['fileSizeBytes'])){
                $audioapp->setFileSizeBytes($converted['results'][0]['fileSizeBytes']);
            }            
            if(isset($converted['results'][0]['sellerUrl'])){
                $audioapp->setSellerUrl($converted['results'][0]['sellerUrl']);
            }
            if(isset($converted['results'][0]['contentAdvisoryRating'])){
                $audioapp->setContentAdvisoryRating($converted['results'][0]['contentAdvisoryRating']);
            }   
            if(isset($converted['results'][0]['userRatingCountForCurrentVersion'])){
                $audioapp->setUserRatingCountForCurrentVersion($converted['results'][0]['userRatingCountForCurrentVersion']);
            }
            if(isset($converted['results'][0]['trackViewUrl'])){
                $audioapp->setTrackViewUrl($converted['results'][0]['trackViewUrl']);
            }
            if(isset($converted['results'][0]['currentVersionReleaseDate'])){
                $audioapp->setCurrentVersionReleaseDate(new \DateTime($converted['results'][0]['currentVersionReleaseDate']));
            }
            if(isset($converted['results'][0]['sellerName'])){
                $audioapp->setSellerName($converted['results'][0]['sellerName']);
            }
            if(isset($converted['results'][0]['releaseDate'])){
                $audioapp->setReleaseDate(new \DateTime($converted['results'][0]['releaseDate']));
            }
            if(isset($converted['results'][0]['primaryGenreName'])){
                $audioapp->setPrimaryGenreName($converted['results'][0]['primaryGenreName']);
            }
            if(isset($converted['results'][0]['primaryGenreName'])){
                $audioapp->setPrimaryGenreName($converted['results'][0]['primaryGenreName']);
            }
            if(isset($converted['results'][0]['releaseNotes'])){
                $audioapp->setReleaseNotes($converted['results'][0]['releaseNotes']);
            }
            if(isset($converted['results'][0]['formattedPrice'])){
                $audioapp->setFormattedPrice($converted['results'][0]['formattedPrice']);
            }    
            if(isset($converted_eu['results'][0]['formattedPrice'])){
                $audioapp->setFormattedPriceEuro($converted_eu['results'][0]['formattedPrice']);
            }
            if(isset($converted['results'][0]['minimumOsVersion'])){
                $audioapp->setMinimumOsVersion($converted['results'][0]['minimumOsVersion']);
            }
            if(isset($converted['results'][0]['currency'])){
                $audioapp->setCurrency($converted['results'][0]['currency']);
            }          
            if(isset($converted['results'][0]['version'])){
                $audioapp->setVersion($converted['results'][0]['version']);
            } 
            if(isset($converted['results'][0]['trackName'])){
                $audioapp->setTrackName($converted['results'][0]['trackName']);
            }   
            if(isset($converted['results'][0]['artistName'])){
                $audioapp->setArtistName($converted['results'][0]['artistName']);
            }  
            if(isset($converted['results'][0]['price'])){
                $audioapp->setPrice($converted['results'][0]['price']);
            }  
            if(isset($converted_eu['results'][0]['price'])){
                $audioapp->setPriceEuro($converted_eu['results'][0]['price']);
            } 
            if(isset($converted['results'][0]['description'])){
                $audioapp->setDescription($converted['results'][0]['description']);
            } 
            if(isset($converted_eu['results'][0]['description'])){
                $audioapp->setDescriptionFR($converted_eu['results'][0]['description']);
            } 
            if(isset($converted['results'][0]['bundleId'])){
                $audioapp->setBundleId($converted['results'][0]['bundleId']);
            } 
            if(isset($converted['results'][0]['trackId'])){
                $audioapp->setTrackId($converted['results'][0]['trackId']);
            } 
            if(isset($converted['results'][0]['averageUserRating'])){
                $audioapp->setAverageUserRating($converted['results'][0]['averageUserRating']);
            } 
            if(isset($converted['results'][0]['userRatingCount'])){
                $audioapp->setUserRatingCount($converted['results'][0]['userRatingCount']);
            }

            $this->em->flush();





        
 
 
        return $this->redirectToRoute('homepage');
    }


}