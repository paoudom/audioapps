<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Categorie;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $imports = array(
            0 => array(
                'nom' => 'Additive Synth',
                'groupe' => 'synth'
            ),
            1 => array(
                'nom' => 'Analog Synth',
                'groupe' => 'synth'
            ),
            2 => array(
                'nom' => 'Analyzer',
                'groupe' => 'tools'
            ),
            3 => array(
                'nom' => 'Bass',
                'groupe' => 'instrument'
            ),
            4 => array(
                'nom' => 'Bass Synth',
                'groupe' => 'synth'
            ),
            5 => array(
                'nom' => 'Brass',
                'groupe' => 'instrument'
            ),
            6 => array(
                'nom' => 'Delay',
                'groupe' => 'effect'
            ),
            7 => array(
                'nom' => 'Digital Synth',
                'groupe' => 'synth'
            ),
            8 => array(
                'nom' => 'Distortion',
                'groupe' => 'effect'
            ),
            9 => array(
                'nom' => 'Drum',
                'groupe' => 'drum'
            ),
            10 => array(
                'nom' => 'Dyn - Comp',
                'groupe' => 'effect'
            ),
            11 => array(
                'nom' => 'Dyn - De-ess',
                'groupe' => 'effect'
            ),
            12 => array(
                'nom' => 'Dyn - Exp/Gate',
                'groupe' => 'effect'
            ),
            13 => array(
                'nom' => 'Dyn - Limiter',
                'groupe' => 'effect'
            ),
            14 => array(
                'nom' => 'Dyn - Multiband',
                'groupe' => 'effect'
            ),
            15 => array(
                'nom' => 'Dyn - Transient',
                'groupe' => 'effect'
            ),
            16 => array(
                'nom' => 'Emulator',
                'groupe' => 'tools'
            ),
            17 => array(
                'nom' => 'EQ',
                'groupe' => 'effect'
            ),
            18 => array(
                'nom' => 'Ethnic',
                'groupe' => 'instrument'
            ),
            19 => array(
                'nom' => 'Exciter',
                'groupe' => 'effect'
            ),
            20 => array(
                'nom' => 'Filter',
                'groupe' => 'effect'
            ),
            21 => array(
                'nom' => 'Flute',
                'groupe' => 'instrument'
            ),
            22 => array(
                'nom' => 'FM Synth',
                'groupe' => 'synth'
            ),
            23 => array(
                'nom' => 'Formant Synth',
                'groupe' => 'synth'
            ),
            24 => array(
                'nom' => 'Granular Synth',
                'groupe' => 'synth'
            ),
            25 => array(
                'nom' => 'Granulizer',
                'groupe' => 'effect'
            ),
            26 => array(
                'nom' => 'Groove Box',
                'groupe' => 'sequencer'
            ),
            27 => array(
                'nom' => 'Guitar',
                'groupe' => 'instrument'
            ),
            28 => array(
                'nom' => 'Guitar FX',
                'groupe' => 'effect'
            ),
            29 => array(
                'nom' => 'Host',
                'groupe' => 'sequencer'
            ),
            30 => array(
                'nom' => 'Hybrid Synth',
                'groupe' => 'synth'
            ),
            31 => array(
                'nom' => 'Loop Tool',
                'groupe' => 'sequencer'
            ),
            32 => array(
                'nom' => 'Mastering',
                'groupe' => 'effect'
            ),
            33 => array(
                'nom' => 'MIDI FX',
                'groupe' => 'midi'
            ),
            34 => array(
                'nom' => 'Misc Synth',
                'groupe' => 'synth'
            ),
            35 => array(
                'nom' => 'Modular Synth',
                'groupe' => 'synth'
            ),
            36 => array(
                'nom' => 'Modulation',
                'groupe' => 'effect'
            ),
            37 => array(
                'nom' => 'Multi FX',
                'groupe' => 'effect'
            ),
            38 => array(
                'nom' => 'Orchestra',
                'groupe' => 'instrument'
            ),
            39 => array(
                'nom' => 'Organ',
                'groupe' => 'instrument'
            ),
            40 => array(
                'nom' => 'Piano',
                'groupe' => 'instrument'
            ),
            41 => array(
                'nom' => 'Pitch',
                'groupe' => 'effect'
            ),
            42 => array(
                'nom' => 'Restoration',
                'groupe' => 'tools'
            ),
            43 => array(
                'nom' => 'Reverb',
                'groupe' => 'effect'
            ),
            44 => array(
                'nom' => 'ROMpler',
                'groupe' => 'synth'
            ),
            45 => array(
                'nom' => 'Sampler',
                'groupe' => 'synth'
            ),
            46 => array(
                'nom' => 'Sequencer',
                'groupe' => 'sequencer'
            ),
            47 => array(
                'nom' => 'Stereo Mod',
                'groupe' => 'effect'
            ),
            48 => array(
                'nom' => 'String',
                'groupe' => 'instrument'
            ),
            49 => array(
                'nom' => 'String Synth',
                'groupe' => 'synth'
            ),
            50 => array(
                'nom' => 'Switch Gate',
                'groupe' => 'effect'
            ),
            51 => array(
                'nom' => 'Utility',
                'groupe' => 'tools'
            ),
            52 => array(
                'nom' => 'Vocal FX',
                'groupe' => 'effect'
            ),
            53 => array(
                'nom' => 'Vocoder',
                'groupe' => 'effect'
            ),
            54 => array(
                'nom' => 'Waveshaping Synth',
                'groupe' => 'synth'
            ),
            55 => array(
                'nom' => 'Whistle',
                'groupe' => 'instrument'
            ),
            56 => array(
                'nom' => 'Woodwinds',
                'groupe' => 'instrument'
            ),
        );

        foreach($imports as $import){

            $categorie = new Categorie();
            $categorie->setNom($import['nom']);
            $categorie->setGroupe($import['groupe']);

            $manager->persist($categorie);
        }
        $manager->flush();
    }
}
