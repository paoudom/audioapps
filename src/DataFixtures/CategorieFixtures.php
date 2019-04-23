<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Categorie;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categories = array(
            'Additive Synth',
            'Analog Synth',
            'Analyzer',
            'Bass',
            'Bass Synth',
            'Brass',
            'Delay',
            'Digital Synth',
           'Distortion',
            'Drum',
            'Dyn - Comp',
            'Dyn - De-ess',
            'Dyn - Exp/Gate',
            'Dyn - Limiter',
            'Dyn - Multiband',
            'Dyn - Transient',
            'Emulator',
            'EQ',
            'Ethnic',
            'Exciter',
            'Filter',
            'Flute',
            'FM Synth',
            'Formant Synth',
            'Granular Synth',
            'Granulizer',
            'Groove Box',
            'Guitar',
            'Guitar FX',
            'Host',
            'Hybrid Synth',
            'Loop Tool',
           'Mastering',
            'MIDI FX',
            'Misc Synth',
            'Modular Synth',
            'Modulation',
            'Multi FX',
            'Orchestra',
            'Organ',
            'Piano',
            'Pitch',
            'Restoration',
            'Reverb',
            'ROMpler',
            'Sampler',
            'Sequencer',
            'Stereo Mod',
            'String',
            'String Synth',
            'Switch Gate',
            'Utility',
            'Vocal FX',
            'Vocoder',
            'Waveshaping Synth',
            'Whistle',
            'Woodwinds',
            'Undefined',
        );

        foreach($categories as $categorie_name){
            $categorie = new Categorie();
            $categorie->setNom($categorie_name);
            $manager->persist($categorie);
        }
        $manager->flush();
    }
}
