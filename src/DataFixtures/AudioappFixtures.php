<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Repository\CategorieRepository;
use App\Entity\Audioapp;
use App\DataFixtures\CategorieFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AudioappFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * @var CategorieRepository
     */
    private $repository;

    public function __construct(CategorieRepository $repository)
    {
        $this->repository = $repository;
    }


    public function load(ObjectManager $manager)
    {
        $tab_apps =  array(
            0 => array(
                'AppID' => '704213054',
                'Name' => 'Cube Synth',
                'Category' => 'Additive Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A groundbreaking new software instrument with the power and flexibility of additive synthesis together with easy editing and morphing capabilities',
                'Manual Link' => 'http://www.virsyn.net/mobileapp/images/cs/CubeSynth.pdf'
            ),
            1 => array(
                'AppID' => '1259592723',
                'Name' => 'Phosphor 2',
                'Category' => 'Additive Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'An unique instrument modeled on the alphaSyntauri, a vintage digital additive synth from the early 80s',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Phosphor_2_Manual.pdf?17031459389108364318'
            ),
            2 => array(
                'AppID' => '1076476110',
                'Name' => 'Analog Synth X',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'No IAP, simple open-source synthesizer example for iPad created entirely with Swift and AudioKit 3, replaced by AudioKit Synth One',
                'Manual Link' => 'N/A'
            ),
            3 => array(
                'AppID' => '676870971',
                'Name' => 'Arctic ProSynth',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'VA synthesizer and vocoder, 4-voice poly, 2 multi-mode filters with 4 modes and variable routing, 3-band EQ, distortion, chorus, phaser, delay, reverb',
                'Manual Link' => 'http://www.onereddog.com.au/uploads/arcticpro/arcticpro-user-guide.pdf'
            ),
            4 => array(
                'AppID' => '1371050497',
                'Name' => 'AudioKit Synth One Synthesizer',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'No IAP, created by over 100+ volunteers, includes MIDI support, sequencer, analog filters, arpeggiators, analog delays, and over 300+ presets',
                'Manual Link' => 'N/A'
            ),
            5 => array(
                'AppID' => '547147254',
                'Name' => 'Cassini Synthesizer',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Polyphonic subtractive synth with 3 OSCs + 2 Filters + AMP + 9 EGs + 6 LFOs + 3band EQ + Saturator + 2 Delays + Arpeggiator',
                'Manual Link' => 'http://www.icegear.net/cassini_ipad/cassini_ipad_manual_v1_2_2.pdf'
            ),
            6 => array(
                'AppID' => '973055710',
                'Name' => 'DRC - Polyphonic Synthesizer',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Unlock is $14 IAP, up to 8 voice polyphonic VA synth with cloud preset, detune, sync, ring mod, multimode filter, reverb, chorus, delay, arpeggiator',
                'Manual Link' => 'https://www.imaginando.pt/products/drc/help/contents'
            ),
            7 => array(
                'AppID' => '687256735',
                'Name' => 'EGSY01 Analog Synth',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Flexible synth with 2 oscillators each with 4 selectable waveforms, arpeggiator, step sequencer, FM, additive and subtractive synthesis',
                'Manual Link' => 'https://www.elliottgarage.com/manuals/egsy01Help.pdf'
            ),
            8 => array(
                'AppID' => '968693910',
                'Name' => 'Enkl',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Fully featured monophonic synthesizer can create a huge variety of sounds',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/enkl_docs.pdf'
            ),
            9 => array(
                'AppID' => '603340125',
                'Name' => 'iMini',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'iOS adaptation of desktop Mini V (virtual Mini Moog) synth with cross-platform preset compatability',
                'Manual Link' => 'http://downloads.arturia.net/products/imini/manual/iMini_Manual_EN.pdf'
            ),
            10 => array(
                'AppID' => '898449685',
                'Name' => 'iProphet',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'iOS adaptation of desktop Prophet V (virtual Sequential Prophet-5) synth with cross-platform preset compatability',
                'Manual Link' => 'N/A'
            ),
            11 => array(
                'AppID' => '673921187',
                'Name' => 'iSEM',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Based on the TAE technology found in the Oberheim SEM V software, iSEM brings back the special characteristics of this iconic synth',
                'Manual Link' => 'http://downloads.arturia.net/products/isem/manual/iSEM_Manual_EN.pdf'
            ),
            12 => array(
                'AppID' => '443141370',
                'Name' => 'iSyn Poly',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'An electronic music studio including three studio-quality, fully programmable virtual analog synthesizers and a drum machine',
                'Manual Link' => 'N/A'
            ),
            13 => array(
                'AppID' => '1133091743',
                'Name' => 'Italizer',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'At it\'s heart is a monophonic synthesizer paired with an authentic tape echo emulation and comes with customizable X/Y pad',
                'Manual Link' => 'N/A'
            ),
            14 => array(
                'AppID' => '665703927',
                'Name' => 'iVCS3',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'EMS VCS3 emulator',
                'Manual Link' => 'http://www.apesoft.it/Manual/iVCS3_user_guide.pdf'
            ),
            15 => array(
                'AppID' => '1292510609',
                'Name' => 'Kauldron',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A 3-osc virtual analog synth with AI preset creation, over 900 presets, 11-source/23-dest mod matrix, 2 XY pads, onboard effects',
                'Manual Link' => 'http://www.yonac.com/kauldron/kauldron_manual.pdf'
            ),
            16 => array(
                'AppID' => '1155825562',
                'Name' => 'LayR',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Massively polyphonic, multi-timbral synthesizer with up to 128 layers each with dual osc, sequencer, can even send MIDI CC to other ports/apps',
                'Manual Link' => 'http://livingmemorysoftware.com/downloads/LayR_Manual.pdf'
            ),
            17 => array(
                'AppID' => '928973939',
                'Name' => 'LF1 Monosynth',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Two-osc sin/saw/sqr with +/- 7 semi pitch on osc 2, filter and amp envelopes, 5-source LFO, glide & gliss, pitch bend to 1 octave',
                'Manual Link' => 'N/A'
            ),
            18 => array(
                'AppID' => '544119998',
                'Name' => 'Magellan',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Preset packs $1-$5 IAP, analog modeling synth with 2 engines, full FX rack, 3 osc/layer, dual filters/layer, unison, mod matrix, arps, step-sequencer',
                'Manual Link' => 'http://www.yonac.com/support/manuals/MagellanManual.pdf'
            ),
            19 => array(
                'AppID' => '1339418001',
                'Name' => 'Minimoog Model D',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Mobile transmutation of the world’s first portable synthesizer, the Minimoog Model D',
                'Manual Link' => 'http://model-d-ios-manual.webflow.io/'
            ),
            20 => array(
                'AppID' => '1218198148',
                'Name' => 'Mood',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'MiniMoog emulator, noise osc with separate envelope, sample warp, FM module, 7-shape XLFO w/ sequencer',
                'Manual Link' => 'http://www.apesoft.it/Manual/mood_user_guide.pdf'
            ),
            21 => array(
                'AppID' => '734323766',
                'Name' => 'Nanologue',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, straghtforward monophonic synthesizer',
                'Manual Link' => 'N/A'
            ),
            22 => array(
                'AppID' => '1078165830',
                'Name' => 'NS1',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A simple and intuitive virtual analog subtractive synthesizer with XY pad controllers',
                'Manual Link' => 'N/A'
            ),
            23 => array(
                'AppID' => '1145895278',
                'Name' => 'Poison-202 Vintage Synthesizer',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => '420 presets make use of oscillators, cutoff filters, ADSR-envelopes, ring, cross modulation, LFOs, sync, super-saw oscillator and more',
                'Manual Link' => 'N/A'
            ),
            24 => array(
                'AppID' => '1438692125',
                'Name' => 'Primer synth',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, two osc + sub osc subtractive synth with FM, noise , sync, filter and amp envelopes, routeable LFO, portamento, ring mod, multi FX',
                'Manual Link' => 'N/A'
            ),
            25 => array(
                'AppID' => '931393910',
                'Name' => 'Pyxis Minor',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'No IAP, a novel instrument / sequencer / synthesizer to play and record sequences in real time and are able to play with various synthesis parameters',
                'Manual Link' => 'N/A'
            ),
            26 => array(
                'AppID' => '443663267',
                'Name' => 'Sunrizer',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'True SuperSaw sound emulation, first found in the legendary Roland JP-8000 synthesizer',
                'Manual Link' => 'http://beepstreet.com/horizon_synth_manual_v1.pdf'
            ),
            27 => array(
                'AppID' => '1230358436',
                'Name' => 'Syndt',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'High quality polyphonic synthesizer with oscillator waveform that can be morphed between pure sine to pure square',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/syndt_docs.pdf'
            ),
            28 => array(
                'AppID' => '1273945851',
                'Name' => 'SyndtSphere',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'By rotating a sphere that consists of more than 70 professionally created states anyone can dial in the perfect sound',
                'Manual Link' => 'N/A'
            ),
            29 => array(
                'AppID' => '1213411818',
                'Name' => 'Unique - Analogue Synth',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Same as desktop version, 2 osc w/ 5 waveforms each, 5 filters w/ 5 mods each, duo arp, vowel filter, 2 FX sections, 300 presets',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Unique_iPad.pdf'
            ),
            30 => array(
                'AppID' => '1085274012',
                'Name' => 'Viking Synth',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An authentic emulation of a classic monophonic analog synthesizer',
                'Manual Link' => 'http://blamsoft.com/wp-content/uploads/2016/02/VikingUserManual101.pdf'
            ),
            31 => array(
                'AppID' => '1185984394',
                'Name' => 'VOLT Synth',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Full-featured and MPE-capable virtual analog synth with built-in effects and over 100 presets',
                'Manual Link' => 'N/A'
            ),
            32 => array(
                'AppID' => '720810459',
                'Name' => 'Xynthesizr',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A streamlined yet capable 32-step matrix sequencer/monotimbral synthesizer with generative features and MIDI',
                'Manual Link' => 'http://yuriturov.com/assets/XynthesizrUserGuide-1.6.pdf'
            ),
            33 => array(
                'AppID' => '1230960440',
                'Name' => 'Zeeon Synth',
                'Category' => 'Analog Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Virtual analog synthesizer, powered by an advanced analog circuit modelling engine, 3 preset pack IAPs for $2.99 each',
                'Manual Link' => 'http://beepstreet.com/Zeeon_user_guide_1_0.pdf'
            ),
            34 => array(
                'AppID' => '685867973',
                'Name' => 'zMors',
                'Category' => 'Analog Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A 4-layer synth with 2 osc, 2 envelopes, en LFO, a multimode filter, and a sequencer on each layer, reverb and delay sends',
                'Manual Link' => 'http://www.zmors.de/zmors-synth/'
            ),
            35 => array(
                'AppID' => '1436332576',
                'Name' => 'Analyser & Tuner AUv3 Plugin',
                'Category' => 'Analyzer',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Fast, high-res 8K fast fourier transforms to display real-time freq spectrum, digital tuner with real time note detection, freq and cents deviation',
                'Manual Link' => 'N/A'
            ),
            36 => array(
                'AppID' => '1378203792',
                'Name' => 'iBassist',
                'Category' => 'Bass',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Bass instrument and virtual player app, integration with other apps by this dev, includes 10 Round Robin sampled natural bass sounds',
                'Manual Link' => 'http://lumbeat.com/iBassist/'
            ),
            37 => array(
                'AppID' => '512929963',
                'Name' => 'iFretless Bass',
                'Category' => 'Bass',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based bass guitar with interface laid out like an 8-string bass and responds to accents and dynamics',
                'Manual Link' => 'N/A'
            ),
            38 => array(
                'AppID' => '1089502073',
                'Name' => 'BASSalicious',
                'Category' => 'Bass Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'The 3 addt\'l osc and 63 presets are $15 IAP, Dedicated monophonic synth bass synthesizer',
                'Manual Link' => 'N/A'
            ),
            39 => array(
                'AppID' => '976074849',
                'Name' => 'Cyclop for iPad',
                'Category' => 'Bass Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Same as dekstop version, a monophonic synthesizer that delivers cutting-edge digital madness at the low end of the frequency spectrum',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Cyclop_iPad.pdf'
            ),
            40 => array(
                'AppID' => '1180892130',
                'Name' => 'Troublemaker',
                'Category' => 'Bass Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'TB-303 emulator monphonic bass synth',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/troublemaker_guide.pdf'
            ),
            41 => array(
                'AppID' => '1037802910',
                'Name' => 'Heavy Brass',
                'Category' => 'Brass',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Trumpet, Trombone and Saxophone sampled in four different brass sections',
                'Manual Link' => 'N/A'
            ),
            42 => array(
                'AppID' => '915761815',
                'Name' => 'iFretless Brass',
                'Category' => 'Brass',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based brass instrument that also includes classic synth sounds and accelerometer dynamics',
                'Manual Link' => 'N/A'
            ),
            43 => array(
                'AppID' => '963192812',
                'Name' => 'apeDelay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Spectral delay implements up to 2048 delay lines with feedback or up to 2048 Brick-wall filters',
                'Manual Link' => 'http://www.apesoft.it/Manual/apeDelay_user_guide.pdf'
            ),
            44 => array(
                'AppID' => '1006375672',
                'Name' => 'Dahlia Delay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A tape style delay effect with filtered feedback and warble amount controls',
                'Manual Link' => 'N/A'
            ),
            45 => array(
                'AppID' => '953953694',
                'Name' => 'Dedalus Delay Audio Mangler',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A network of delay lines is continually granulated and modulated, and are further processed by filters, dynamic processors and saturation',
                'Manual Link' => 'http://www.apesoft.it/Manual/Dedalus_user_guide.pdf'
            ),
            46 => array(
                'AppID' => '1253069666',
                'Name' => 'Dubstation 2',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'True stereo operation and a nice saturated feedback path provide an instant-classic delay effect',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Dubstation_2.0_Manual.pdf?10783846266107768155'
            ),
            47 => array(
                'AppID' => '1062305416',
                'Name' => 'Frekvens',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A frequency shifter and delay effect where, unlike a pitch shifter, all frequencies are shifted linearly then fed back into itself using the stereo delay',
                'Manual Link' => 'N/A'
            ),
            48 => array(
                'AppID' => '1299716499',
                'Name' => 'FS Reverser Delay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A stereo delay effect with LP/HP filter, reverse mode, feedback, and mix',
                'Manual Link' => 'N/A'
            ),
            49 => array(
                'AppID' => '1351237773',
                'Name' => 'Kosmonaut',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Multitap Delay with a twist, includes tape looper, 4-tap delay, LP/HP filters with LFO, autopan, ambience generator, and haas effect',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/Kosmonaut_Guide.pdf'
            ),
            50 => array(
                'AppID' => '1128402103',
                'Name' => 'Lofionic Duplicat Delay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A warm and lush tape delay effect with Swell and Sustain controls, tape Speed control, and a tape Effect control for emulating worn tape',
                'Manual Link' => 'N/A'
            ),
            51 => array(
                'AppID' => '1434380749',
                'Name' => 'Panning Delay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A stereo digital panning delay allowing specified tempo and beat divisions for interesting synced delay patterns, stereo separation, reversing',
                'Manual Link' => 'N/A'
            ),
            52 => array(
                'AppID' => '1407764053',
                'Name' => 'RE-1',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A full featured virtual tape machine capable of delivering authentic tape based echo and chorus effects',
                'Manual Link' => 'N/A'
            ),
            53 => array(
                'AppID' => '1261900553',
                'Name' => 'Replicant 2',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Essentially a randomized looper/buffer reverse, with a randomized stutter effect inside the loop',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Replicant_2.0_Manual_1.pdf?5203245394891213356'
            ),
            54 => array(
                'AppID' => '1079530569',
                'Name' => 'RP-1',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Two separate stereo delay lines allow for a wide range of effects ranging from basic slapback and ping-ping type echos to complex modulations',
                'Manual Link' => 'http://numericalaudio.com/rp1/manual/index.html'
            ),
            55 => array(
                'AppID' => '1354390681',
                'Name' => 'Stone Echo',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Echo effect inspired by the mayan pyramids acoustic echo',
                'Manual Link' => 'N/A'
            ),
            56 => array(
                'AppID' => '1020197094',
                'Name' => 'Tap Delay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Combines the warm sound of vintage tape echo machines with a modern, step sequencer-like tapped delay engine',
                'Manual Link' => 'N/A'
            ),
            57 => array(
                'AppID' => '1439116752',
                'Name' => 'Woodulator',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'A delay and pitch shifter inspired by analog bucket brigade delays, 2 versatile modulators, pitch shifting by modulating delay line clock',
                'Manual Link' => 'http://woodulator.woodmansimmaculatemaplesyrupstudio.be/WoodulatorHelp.pdf'
            ),
            58 => array(
                'AppID' => '1444438070',
                'Name' => 'Multi-Tap Delay AUv3 Plugin',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A 4-tap delay with per-tap timing and tempo sync, serial or parallel modes, LFO modulation, stereo panning',
                'Manual Link' => 'N/A'
            ),
            59 => array(
                'AppID' => '1444589287',
                'Name' => 'Stereo Delay',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Unique stereo delay with a mixing matrix that allows randomization in the stereo placement of echoes',
                'Manual Link' => 'N/A'
            ),
            60 => array(
                'AppID' => '1436905540',
                'Name' => 'AudioKit Digital D1 Synth',
                'Category' => 'Digital Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A 64-voice synth inspired by digital hardware of the 80\'s and 90\'s, 100% of proceeds support the AudioKit open-source project',
                'Manual Link' => 'N/A'
            ),
            61 => array(
                'AppID' => '966030326',
                'Name' => 'iM1',
                'Category' => 'Digital Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Software emulation of Korg M1 hardware synth, includes a total of 3300 sounds over 34 cards and KAOSSILATOR',
                'Manual Link' => 'https://www.korg.com/download/global/korg_im1_for_ipad/iM1_OM_E.pdf'
            ),
            62 => array(
                'AppID' => '1439660868',
                'Name' => 'SquareSynth 2 - 8bit Synth',
                'Category' => 'Digital Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A hybrid analog/8bit style synth with chiptune features from NES and Commodore 64, 8 layers with 5 voices each, loop recorder with wav sharing',
                'Manual Link' => 'N/A'
            ),
            63 => array(
                'AppID' => '1001885786',
                'Name' => 'Buttercup Bitcrush',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A general purpose bit-crusher, sample-rate reduction & noise effect',
                'Manual Link' => 'N/A'
            ),
            64 => array(
                'AppID' => '1368962464',
                'Name' => 'DAW Cassette',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Emulates the sound of a classical tape deck',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/dawcassette_docs.pdf'
            ),
            65 => array(
                'AppID' => '1391494450',
                'Name' => 'DAW LP',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Emulates the sound of a vinyl disc (and player), can simulate scratches, dust, bad cables, etc.',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/dawlp_docs.pdf'
            ),
            66 => array(
                'AppID' => '1062115431',
                'Name' => 'DC-9 Overdrive',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Circuit modeled overdrive plug-in that emulates the famous Ibanez TS9 Tube Screamer',
                'Manual Link' => 'http://blamsoft.com/wp-content/uploads/2015/11/DC9UserManual100.pdf'
            ),
            67 => array(
                'AppID' => '1398817871',
                'Name' => 'Degrader',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A combined resampler and bit crusher, resample range 250Hz to 96kHz, bit crush range 3 to 24 bits',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/degrader_docs.pdf'
            ),
            68 => array(
                'AppID' => '1435301903',
                'Name' => 'Electrogene',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A low fidelity audio effect combining bit-crusher, modulation, saturation and filter with scope visualizer',
                'Manual Link' => 'https://www.vatanator.com/manual-electrogene.pdf'
            ),
            69 => array(
                'AppID' => '1273275127',
                'Name' => 'Fat Lady',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Delivers good sustain, rich harmonics, right amount of compression and at the same time keeps the dynamics as much as possible',
                'Manual Link' => 'N/A'
            ),
            70 => array(
                'AppID' => '1343651192',
                'Name' => 'Fly Tape',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Tape FX plugin with play/stop/pause, noise, pitch, half-speed, saturate, lo-fi, loop, and stutter',
                'Manual Link' => 'N/A'
            ),
            71 => array(
                'AppID' => '1263928193',
                'Name' => 'FuzzPlus 3',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, a resonant lowpass filter (modelled on the MS20 LPF) and a distortion engine (modelled on the Distortion+ pedal) with a feedback loop',
                'Manual Link' => 'N/A'
            ),
            72 => array(
                'AppID' => '1249816007',
                'Name' => 'Grind Distortion',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Consists of three main blocks: wavetable lookup, to algorithmic saturation/distortion, to a multi-mode filter with eleven different topologies',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Grind_1.0_Manual.pdf?394349105154125105'
            ),
            73 => array(
                'AppID' => '1385029157',
                'Name' => 'Little Rocker',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Whole guitar sound with innovative distortion effect, speaker simulation and reverb',
                'Manual Link' => 'N/A'
            ),
            74 => array(
                'AppID' => '1292776927',
                'Name' => 'Lo-Fly Dirt',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An audio coloration utility plugin featuring different kinds of saturation and bit crusher distortions',
                'Manual Link' => 'N/A'
            ),
            75 => array(
                'AppID' => '579955189',
                'Name' => 'Nils',
                'Category' => 'Distortion',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A real time sound effect machine with a minimalistic looper that comes with bitcrush, delay and gain for distortion',
                'Manual Link' => 'N/A'
            ),
            76 => array(
                'AppID' => '1438221956',
                'Name' => 'Overdrive AUv3 Plugin',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Wave-shaping overdrive/distortion with optional compressor, 9 different algorithms, low and high pass filters, tone controls or 3-band PEQ',
                'Manual Link' => 'N/A'
            ),
            77 => array(
                'AppID' => '1069168353',
                'Name' => 'Resampler Bitcrusher',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Multiple flavors of sample rate reduction and quantization provide endless possibilities for sonic mayhem',
                'Manual Link' => 'http://blamsoft.com/wp-content/uploads/2015/12/ResamplerUserManual100.pdf'
            ),
            78 => array(
                'AppID' => '1225597875',
                'Name' => 'Resonator',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Creates natural sounding resonances in an acoustic body along with a reverb efffect',
                'Manual Link' => 'N/A'
            ),
            79 => array(
                'AppID' => '1406136418',
                'Name' => 'RX950 Classic DA Converter',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Classic sampler emulation for bit crushing and filtering effects',
                'Manual Link' => 'https://www.mathieudemange.fr/wp-content/uploads/2018/08/RX950-documentation-EN.pdf'
            ),
            80 => array(
                'AppID' => '1006335255',
                'Name' => 'Saffron Saturator',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A filter drive, distortion and saturation effect',
                'Manual Link' => 'N/A'
            ),
            81 => array(
                'AppID' => '796836524',
                'Name' => 'SquashIt',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Unique distortion algorithm and should be essential in every music producers toolset',
                'Manual Link' => 'N/A'
            ),
            82 => array(
                'AppID' => '1221368957',
                'Name' => 'Warm Distortion',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A non linear distortion that works great with guitars, drums and other instruments',
                'Manual Link' => 'N/A'
            ),
            83 => array(
                'AppID' => '1289484131',
                'Name' => 'WaveFolder',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A simple wave folding distortion unit',
                'Manual Link' => 'http://livingmemorysoftware.com/wavefoldermanual.html'
            ),
            84 => array(
                'AppID' => '1441935745',
                'Name' => 'REAMP',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A complex spectral saturation processor simulating a set of different analog gear in a new and unique way, 7 different models for tape and tube drive',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/reamp_docs.pdf'
            ),
            85 => array(
                'AppID' => '1160030374',
                'Name' => 'AAS Objeq',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Offers beam, drumhead, and plate resonators. Customize via pitch, material, decay, and tone controls.',
                'Manual Link' => 'N/A'
            ),
            86 => array(
                'AppID' => '956450390',
                'Name' => 'Attack Drums',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Based on Waldorf Attack VST from 2001, it consists of a 24-part sound engine, now packed with a pattern sequencer and a versatile effects section',
                'Manual Link' => 'https://waldorfmusic.com/downloads/ipadAttack/attack_ios_manual.pdf'
            ),
            87 => array(
                'AppID' => '1289090729',
                'Name' => 'Axon 2',
                'Category' => 'Drum',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'A drum synth driven by artificial intelligence uses a modified artificial neural network as a sequencer, featuring seven FM-based percussion voices',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Axon_2.0_Manual.pdf?8561226915577053189'
            ),
            88 => array(
                'AppID' => '839563064',
                'Name' => 'BeatHawk',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Sample sets are IAP for $2-$5, beat production studio including 2 sample packs and seqeuncer',
                'Manual Link' => 'https://s3.amazonaws.com/uvi/BeatHawk/beathawk_manual.pdf'
            ),
            89 => array(
                'AppID' => '1030319584',
                'Name' => 'Drum Session',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A very fast, simple way to put together a complete drum track with a library of 3600 editable patterns, loops, and fills',
                'Manual Link' => 'N/A'
            ),
            90 => array(
                'AppID' => '1032935528',
                'Name' => 'DrumPerfect Pro',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'AU is player only, Human-feel drummer app with multi-sampled drums, humanize, jam, reverb send, live pads and sequencer with pattern chain',
                'Manual Link' => 'http://www.drumperfect.nl/drumperfect_manual_v2.pdf'
            ),
            91 => array(
                'AppID' => '1274566095',
                'Name' => 'EGDR606 - 606 Drum Machine',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A drum machine that emulates the vintage (606) hardware from the 80\'s with the easiness of modern software',
                'Manual Link' => 'https://www.elliottgarage.com/manuals/EGDR606Help.pdf'
            ),
            92 => array(
                'AppID' => '454709863',
                'Name' => 'EGDR808 Drum Machine HD',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A drum machine that emulates the vintage (808) hardware from the 80\'s with the easiness of modern software',
                'Manual Link' => 'https://www.elliottgarage.com/manuals/EGDR808Help.pdf'
            ),
            93 => array(
                'AppID' => '916294557',
                'Name' => 'EGDR909 - 909 Drum Machine',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A drum machine that emulates the vintage (909) hardware from the 80\'s with the easiness of modern software',
                'Manual Link' => 'https://www.elliottgarage.com/manuals/EGDR909Help.pdf'
            ),
            94 => array(
                'AppID' => '943634853',
                'Name' => 'EGLM1 - LM1 Drum Machine',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A drum machine that emulates the vintage (LM-1) hardware from the 80\'s with the easiness of modern software',
                'Manual Link' => 'https://www.elliottgarage.com/manuals/EGLM1Help.pdf'
            ),
            95 => array(
                'AppID' => '1318750537',
                'Name' => 'Groove Rider GR-16',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Poison-202 two oscillator synth engine, plus PCM drum samples, insert/send/master effects, arpeggiator, automation, modulator, ADSR and filter',
                'Manual Link' => 'https://www.jimaudio.pro/grooverider/grooverider_manual.pdf'
            ),
            96 => array(
                'AppID' => '557824278',
                'Name' => 'Impaktor',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Drum synthesizer with a vast sonic palette and microphone trigger of drum sounds',
                'Manual Link' => 'http://beepstreet.com/appsupport/impaktor/'
            ),
            97 => array(
                'AppID' => '1045383182',
                'Name' => 'iSpark',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'iOS adaptation of desktop Spark 2 drum sampler/sequencer with cross-platform preset compatability',
                'Manual Link' => 'https://downloads.arturia.com/products/ispark/manual/iSpark_Manual_1_0_0_EN.pdf'
            ),
            98 => array(
                'AppID' => '1249831244',
                'Name' => 'MV08',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Features over 200 16bit 44.1k wav files that have been faithfully sampled from one of the most important drum machines in history',
                'Manual Link' => 'N/A'
            ),
            99 => array(
                'AppID' => '1122156899',
                'Name' => 'Ruismaker',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A unique drumsynth plugin, which is coupled with a creative Euclidean sequencer when run in standalone mode',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/ruismaker_guide.pdf'
            ),
            100 => array(
                'AppID' => '1143644577',
                'Name' => 'Ruismaker FM',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'FM synthesis engine lets you create anything from snares, kicks and spacy toms to weird and unconventional percussive sounds and effects',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/ruismaker_fm_guide.pdf'
            ),
            101 => array(
                'AppID' => '1441208874',
                'Name' => 'Ruismaker Noir',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A different kind of drumsynth, monophonic synthesis engine, fully integrated step sequencer, modest CPU and resource loads',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/Noir_Guide.pdf'
            ),
            102 => array(
                'AppID' => '1276650009',
                'Name' => 'SNAP - Reactable Drum Machine',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'MIDI support and Saving functions are each $4 IAP, Drum sampler/sequencer with motion control',
                'Manual Link' => 'http://reactable.com/snap/'
            ),
            103 => array(
                'AppID' => '1362619238',
                'Name' => 'SynthDrum Kick',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Kick drum synthesizer, sine and clipped triangle osc, pitch envelope, amp envelope, LFO, noise, PEQx2, soft clipper',
                'Manual Link' => 'N/A'
            ),
            104 => array(
                'AppID' => '657577819',
                'Name' => 'SynthDrum Pads',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A virtual analog drum synthesiser, with a 100% synthesized signal path, 64 step sequencer and 4 drums all with EQ and effects',
                'Manual Link' => 'N/A'
            ),
            105 => array(
                'AppID' => '1224621320',
                'Name' => 'Ton: Drum Machine',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Custom samples are $10 IAP, Drum sampler/sequencer with delay and reverb sends, resonant filter, and saturator',
                'Manual Link' => 'http://ton.bravebolt.com/user_manual'
            ),
            106 => array(
                'AppID' => '1373603856',
                'Name' => 'unklepop:DRUM',
                'Category' => 'Drum',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Based on the sound and feel of classic drum machines, 7 built-in presets, over 50 drum sounds, 16-step sequencer',
                'Manual Link' => 'N/A'
            ),
            107 => array(
                'AppID' => '1035157789',
                'Name' => 'Vatanator',
                'Category' => 'Drum',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Vatanator SX is for iPhone, Drum machine that can also send MIDI to other devices',
                'Manual Link' => 'https://www.vatanator.com/Manual.pdf'
            ),
            108 => array(
                'AppID' => '1426387457',
                'Name' => 'Audio Compressor',
                'Category' => 'Dyn - Comp',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'AUv3 compatible audio compressor that supports a modern graphical interface and presets with stereo meters for monitoring signal levels',
                'Manual Link' => 'N/A'
            ),
            109 => array(
                'AppID' => '1234071352',
                'Name' => 'Cornflower Compressor',
                'Category' => 'Dyn - Comp',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A simple stereo dynamics compressor with variable knee and ratio for gooey pumps and swells',
                'Manual Link' => 'N/A'
            ),
            110 => array(
                'AppID' => '1241268066',
                'Name' => 'NYCompressor',
                'Category' => 'Dyn - Comp',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'A pro compressor with ratio up to 1:10, optional key signal filtering, true sidechaining, hard/soft knee, parallel compression, independent L/R or M/S',
                'Manual Link' => 'N/A'
            ),
            111 => array(
                'AppID' => '1270238019',
                'Name' => 'Pumphouse',
                'Category' => 'Dyn - Comp',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'A simple and excellent compressor coupled with a step sequencer driving an envelope generator allowing for sidechain-compression',
                'Manual Link' => 'N/A'
            ),
            112 => array(
                'AppID' => '1248448318',
                'Name' => 'Rough Rider 2',
                'Category' => 'Dyn - Comp',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, standard compressor effect',
                'Manual Link' => 'N/A'
            ),
            113 => array(
                'AppID' => '1410677870',
                'Name' => 'Woodpressor',
                'Category' => 'Dyn - Comp',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'A classic compressor with auto gain, tube distort, adaptive threshold, non-linear release, multimode side chain filter, limiter',
                'Manual Link' => 'http://www.woodmansimmaculatemaplesyrupstudio.be/woodpressor/WoodpressorHelp.pdf'
            ),
            114 => array(
                'AppID' => '1037999669',
                'Name' => 'Esspresso',
                'Category' => 'Dyn - De-ess',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Advanced de-esser with an intuitive user interface with decoupled detection and suppression settings',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/esspresso_docs.pdf'
            ),
            115 => array(
                'AppID' => '1428297152',
                'Name' => 'Audio Expander',
                'Category' => 'Dyn - Exp/Gate',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Audio expander with stereo metering used to increase the dynamic range of the audio signal by reducing levels below a specified threshold',
                'Manual Link' => 'N/A'
            ),
            116 => array(
                'AppID' => '1436698776',
                'Name' => 'Noise Gate AUv3 Plugin',
                'Category' => 'Dyn - Exp/Gate',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Noise gate that allows suppression of background noise over a specified level by a chosen amount, attack, release, hold, and lo/hi-pass filter controls',
                'Manual Link' => 'N/A'
            ),
            117 => array(
                'AppID' => '1436196516',
                'Name' => 'WoodnGate',
                'Category' => 'Dyn - Exp/Gate',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Expander/gate with typical threshold/attack/sustain/release controls but can also be controlled with sidechain or MIDI',
                'Manual Link' => 'http://woodngate.woodmansimmaculatemaplesyrupstudio.be/WoodnGateHelp.pdf'
            ),
            118 => array(
                'AppID' => '1323117302',
                'Name' => 'FAC Maxima',
                'Category' => 'Dyn - Limiter',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An audio effect designed to provide automatic gain control of your audio materials',
                'Manual Link' => 'http://fredantoncorvest.com/FAC_Maxima.html'
            ),
            119 => array(
                'AppID' => '995163144',
                'Name' => 'Korvpressor',
                'Category' => 'Dyn - Limiter',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Adaptive compressor/limiter with an easy-to-use interface and 3-band EQ',
                'Manual Link' => 'N/A'
            ),
            120 => array(
                'AppID' => '945375756',
                'Name' => 'Limiter',
                'Category' => 'Dyn - Limiter',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A wide range of dynamic processing from very gentle volume attenuation to heavy distortion',
                'Manual Link' => 'http://www.apesoft.it/Manual/Limiter_user_guide.pdf'
            ),
            121 => array(
                'AppID' => '1202923828',
                'Name' => 'NoLimits AU Limiter by DDMF',
                'Category' => 'Dyn - Limiter',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Look-ahead limiter with optional auto-gain, transient stereo link, advanced variable lookahead, attack and release times, and state-of-the-art dithering',
                'Manual Link' => 'N/A'
            ),
            122 => array(
                'AppID' => '1257672871',
                'Name' => 'Bark Filter',
                'Category' => 'Dyn - Multiband',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Multi-band filter (EQ) and compressor with critical band analyzer',
                'Manual Link' => 'N/A'
            ),
            123 => array(
                'AppID' => '1438853950',
                'Name' => 'Multi-Band Compressor Plugin',
                'Category' => 'Dyn - Multiband',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => '4-band multiband compressor with auto make-up',
                'Manual Link' => 'N/A'
            ),
            124 => array(
                'AppID' => '1026876866',
                'Name' => 'PressIt',
                'Category' => 'Dyn - Multiband',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Multi-band compressor for the professional audio engineer with optional output limiter',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/pressit_docs.pdf'
            ),
            125 => array(
                'AppID' => '1354088081',
                'Name' => 'FAC Transient',
                'Category' => 'Dyn - Transient',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An outstanding dynamics processor providing precise design and control of the attack and sustain of your instruments',
                'Manual Link' => 'http://fredantoncorvest.com/FAC_Transient.html'
            ),
            126 => array(
                'AppID' => '935826909',
                'Name' => 'MicSwap Pro',
                'Category' => 'Emulator',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Microphone modelling featuring 15 different studio mics',
                'Manual Link' => 'N/A'
            ),
            127 => array(
                'AppID' => '1127457881',
                'Name' => '6144 equalizer by DDMF',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Equalizer which aims to recreate the legendary sound of the Neve hardware EQs with a higher harmonic generation algorithm',
                'Manual Link' => 'N/A'
            ),
            128 => array(
                'AppID' => '903006632',
                'Name' => 'apeFilter',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A sophisticated equaliser, the DSP is based on the Biquad/Cascade filters',
                'Manual Link' => 'http://www.apesoft.it/Manual/apeFilter_user_guide.pdf'
            ),
            129 => array(
                'AppID' => '1301365260',
                'Name' => 'DirectionalEQ',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Takes stereo EQ concept further to allow equalizing all directions in the stereo field independently',
                'Manual Link' => 'N/A'
            ),
            130 => array(
                'AppID' => '1401182622',
                'Name' => 'FabFilter Pro-Q 2',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Same as desktop version, a transparent, high-quality EQ for mixing or mastering, up to 24 bands, Natural Phase mode, Spectrum Grab, EQ Match',
                'Manual Link' => 'https://www.fabfilter.com/help/ffproq2-manual.pdf'
            ),
            131 => array(
                'AppID' => '1200763501',
                'Name' => 'FuxEQ',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A 7-band parametric EQ with high/low shelf, high/low balance, and gain compensation',
                'Manual Link' => 'N/A'
            ),
            132 => array(
                'AppID' => '1399551938',
                'Name' => 'GotoEQ',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A parametric EQ with 2 dynamic bands, high/low shelf pultec-style filters, highpass filter',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/gotoeq_docs.pdf'
            ),
            133 => array(
                'AppID' => '1428328011',
                'Name' => 'Parametric EQ',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Stereo parametric equalizer with up to 4 bands with 24dB cut/boost',
                'Manual Link' => 'N/A'
            ),
            134 => array(
                'AppID' => '1403326201',
                'Name' => 'Parametric Equalizer',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A 6-band parametric equalizer with high/low shelf, two bell filter, all with adjustable Q',
                'Manual Link' => 'N/A'
            ),
            135 => array(
                'AppID' => '1275918107',
                'Name' => 'SOAR Pro',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Challenges you to control your own 10-band graphic EQ while attempting to match the timbre of a \'target\' sound',
                'Manual Link' => 'N/A'
            ),
            136 => array(
                'AppID' => '1434702885',
                'Name' => 'Stereo Graphic EQ',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A 10 band stereo equalizer allows independent manipulation of both stereo channels with adjustments of +/- 12dB, stereo metering',
                'Manual Link' => 'N/A'
            ),
            137 => array(
                'AppID' => '1117886302',
                'Name' => 'zMors EQ',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A 5 band EQ with M/S option, 7 filter types, stereo sample delay, pan, gain, and analog noise',
                'Manual Link' => 'N/A'
            ),
            138 => array(
                'AppID' => '366107163',
                'Name' => 'iShala',
                'Category' => 'Ethnic',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'An Indian music software that combines a tabla machine, a lehra player and an electronic tanpura/swarmandal',
                'Manual Link' => 'N/A'
            ),
            139 => array(
                'AppID' => '1137879159',
                'Name' => 'SwarPlug',
                'Category' => 'Ethnic',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Voices are $2.99/ea IAP, all-voices pack is $99.99',
                'Manual Link' => 'N/A'
            ),
            140 => array(
                'AppID' => '1292228070',
                'Name' => 'REMAKE',
                'Category' => 'Exciter',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Input signal split into 3 parts, resonsnace added to lows, two harmonics to mids (one unison and one fifth) in stereo then overdriven and boosted',
                'Manual Link' => 'N/A'
            ),
            141 => array(
                'AppID' => '979648058',
                'Name' => 'DubFilter',
                'Category' => 'Filter',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Initially free, AU support is $2 IAP. A dual low-pass/high-pass 24/48 dB filter, with resonance and the exclusive Overlap parameter',
                'Manual Link' => 'http://www.apesoft.it/Manual/DubFilter_user_guide.pdf'
            ),
            142 => array(
                'AppID' => '1074502761',
                'Name' => 'F-16 Filter',
                'Category' => 'Filter',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Flexible multi-mode filter with frequency response display featuring sixteen modes, frequency and resonance controls, saturation, and wet/dry mix',
                'Manual Link' => 'http://blamsoft.com/wp-content/uploads/2016/01/F16UserManual100.pdf'
            ),
            143 => array(
                'AppID' => '396776418',
                'Name' => 'Filtatron',
                'Category' => 'Filter',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Realtime audio filter and effects engine',
                'Manual Link' => 'https://api.moogmusic.com/sites/default/files/2018-10/filtatronUserGuide.pdf'
            ),
            144 => array(
                'AppID' => '1329509841',
                'Name' => 'Filterstation2',
                'Category' => 'Filter',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Classic serial/parallel/stereo dual filter topology with twelve filter algorithms, an envelope follower with stereo sidechain input',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Filterstation_2.0_manual.pdf?1870155447956731216'
            ),
            145 => array(
                'AppID' => '1421830251',
                'Name' => 'Formante',
                'Category' => 'Filter',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A formant/vowel filter with integrated envelope automation and tempo sync',
                'Manual Link' => 'N/A'
            ),
            146 => array(
                'AppID' => '666864434',
                'Name' => 'WOW Filterbox',
                'Category' => 'Filter',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Same as desktop version, 21 filter types with modulation, distortion, and XY pad control',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/WOW2.pdf'
            ),
            147 => array(
                'AppID' => '1446253681',
                'Name' => 'FilterMorph AUv3',
                'Category' => 'Filter',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'LP, BP, HP, notch and formant filters, can assign different filters for low and high bands and morph, XY control pads, overdrive, bit shift, tape delay',
                'Manual Link' => 'N/A'
            ),
            148 => array(
                'AppID' => '1264401321',
                'Name' => 'Jubal Flute',
                'Category' => 'Flute',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based instrument based on a unique flute',
                'Manual Link' => 'N/A'
            ),
            149 => array(
                'AppID' => '1198179436',
                'Name' => 'Baervaag',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An easy to use but still powerful and tweakable synthesizer, accessible to everyone with several parameters are sensitive to velocity',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/baervaag_docs.pdf'
            ),
            150 => array(
                'AppID' => '1203273984',
                'Name' => 'Deep Synth',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Touch control of FM-generated waveform',
                'Manual Link' => 'N/A'
            ),
            151 => array(
                'AppID' => '1121442614',
                'Name' => 'FM Essentials',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Connect to Yamaha MX BK/BU series to unlock full features, basically a DX7 FM synth recreated as an app',
                'Manual Link' => 'https://usa.yamaha.com/files/download/other_assets/7/812087/FMEssentialManualEn.pdf'
            ),
            152 => array(
                'AppID' => '910545680',
                'Name' => 'FM4',
                'Category' => 'FM Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A 4-operator FM synth, 2-4x poly unison, 24-voice polyphony, 4-mode arpeggiator, 3 different sound engines based on DX-series',
                'Manual Link' => 'http://www.primal-audio.com/fm4/manual.html'
            ),
            153 => array(
                'AppID' => '1247269157',
                'Name' => 'Hyperion Synthesizer',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Morphing waves technology for great space sounds',
                'Manual Link' => 'N/A'
            ),
            154 => array(
                'AppID' => '1330269027',
                'Name' => 'KQ Dixie',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => '6-Op FM synth preset compatible with DX7',
                'Manual Link' => 'https://www.kiraqtech.jp/blog/?page_id=287'
            ),
            155 => array(
                'AppID' => '1371863334',
                'Name' => 'Kronecker Synthesizer',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A synthesizer with a mechanism to make sounds many times like a rhythm machine each time you press a keyboard',
                'Manual Link' => 'http://www.icegear.net/kronecker/manual/'
            ),
            156 => array(
                'AppID' => '1247473972',
                'Name' => 'NFM',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An intuitive 6-op FM synthesizer with a streamlined interface',
                'Manual Link' => 'https://nikolozi.com/apps/nfm/help'
            ),
            157 => array(
                'AppID' => '1161642832',
                'Name' => 'Phasemaker',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A full-blown 6-Operator FM Synth',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/phasemaker_guide.pdf'
            ),
            158 => array(
                'AppID' => '625740515',
                'Name' => 'Stria',
                'Category' => 'FM Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Multilevel Interactive Sound Synthesizer with up to 240 Frequency Modulation Oscillators or simple Wavetable Additive',
                'Manual Link' => 'http://www.apesoft.it/Manual/Stria_user_guide.pdf'
            ),
            159 => array(
                'AppID' => '718101734',
                'Name' => 'TF7 Synth',
                'Category' => 'FM Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Essential upgrades are $2-$3 IAP, 7 (39 after upgrade) high quality FM algorithms, 10 (13 after upgrade) effects, in-scale pad keyboard',
                'Manual Link' => 'https://tenaciousfrog.com/wp-content/uploads/2017/03/TF7-Manual-Final-1.0.pdf'
            ),
            160 => array(
                'AppID' => '1439914019',
                'Name' => 'Aparillo',
                'Category' => 'FM Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Full version is $18 IAP, an advanced 16 voice FM synth, same as dekstop version and preset compatible',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Aparillo_iPad.pdf'
            ),
            161 => array(
                'AppID' => '382428641',
                'Name' => 'iVoxel',
                'Category' => 'Formant Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Voice synthesizer and vocoder with pitch follower and auto tuning, use pre-recorded voxels for speech synthesis or record your own',
                'Manual Link' => 'N/A'
            ),
            162 => array(
                'AppID' => '1151014469',
                'Name' => 'Jussi',
                'Category' => 'Formant Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Synthesizer that emulates male voice vowels in a unique way with velocity control',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/jussi_docs.pdf'
            ),
            163 => array(
                'AppID' => '1088853546',
                'Name' => 'Phonem',
                'Category' => 'Formant Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Creative vocal synthesizer with advanced routing, modulation, text-to-speech, and pitch track',
                'Manual Link' => 'http://wolfgangpalm.com/VsrVst/iOSPhonemManual.pdf'
            ),
            164 => array(
                'AppID' => '1261498777',
                'Name' => 'Speak Unit',
                'Category' => 'Formant Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Speech synthesiser audio extension where you can enter up to twelve phrases that are each triggered by a unique note',
                'Manual Link' => 'N/A'
            ),
            165 => array(
                'AppID' => '561369733',
                'Name' => 'Borderlands Granular',
                'Category' => 'Granular Synth',
                'AU' => '',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Granular synthesizer built from the ground up for touch, touch motion automation, import and real-time sampling, accelerometer control',
                'Manual Link' => 'N/A'
            ),
            166 => array(
                'AppID' => '487233637',
                'Name' => 'Grain Science',
                'Category' => 'Granular Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Mixes granular and traditional synthesis, waveform import, configurable FX chain, arpeggiator with chord and step modes, MIDI learn, XY pads',
                'Manual Link' => 'N/A'
            ),
            167 => array(
                'AppID' => '565880268',
                'Name' => 'iPulsaret',
                'Category' => 'Granular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Capable of all time-domain varieties of granular synthesis including Grainlet, Trainlet, FM, time/pitch shifting, time/pitch jittering, grain fountain',
                'Manual Link' => 'http://www.apesoft.it/Manual/iPulsaret_user_guide.pdf'
            ),
            168 => array(
                'AppID' => '1436174474',
                'Name' => 'MonoGranulator',
                'Category' => 'Granular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A simple granular synthesis for live electronics, waveform, density and duration, control pitch, FM and AM in every grain, filter, reverb',
                'Manual Link' => 'N/A'
            ),
            169 => array(
                'AppID' => '1286582023',
                'Name' => 'Nimbus AU',
                'Category' => 'Granular Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Granular synthesizer instrument creates clouds of sounds',
                'Manual Link' => 'N/A'
            ),
            170 => array(
                'AppID' => '1408866172',
                'Name' => 'Quanta Granular Synth',
                'Category' => 'Granular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => '6-voice granular synth identical to desktop version',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Quanta_1.0_Manual_20180706.pdf?14715088630984124637'
            ),
            171 => array(
                'AppID' => '1391256308',
                'Name' => 'SpaceCraft Granular Synth',
                'Category' => 'Granular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Granular synth with audio import capabilities that can be hosted as an AU effect',
                'Manual Link' => 'N/A'
            ),
            172 => array(
                'AppID' => '1344470087',
                'Name' => 'Tardigrain',
                'Category' => 'Granular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Granular synthesizer that can run as an instrument or as an effect',
                'Manual Link' => 'N/A'
            ),
            173 => array(
                'AppID' => '464660779',
                'Name' => 'iDensity',
                'Category' => 'Granulizer',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Time/pitch shifting/jittering, intricate textures, grain fountain/pulverizer, record/manipulate buffers, complex scrub pad exploration, dyn env shape',
                'Manual Link' => 'http://www.apesoft.it/Manual/iDensity_user_guide.pdf'
            ),
            174 => array(
                'AppID' => '1329856244',
                'Name' => 'Moonshine AU',
                'Category' => 'Granulizer',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A stereo granulator effect that can add shimmer to a vocal track, act as a delay, or transform synth sounds into the most uncanny pads',
                'Manual Link' => 'N/A'
            ),
            175 => array(
                'AppID' => '859084874',
                'Name' => 'Egoist',
                'Category' => 'Groove Box',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Same as dekstop version, a groove-box style loop player/slicer with onboard bass, beat and fx',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Egoist.pdf'
            ),
            176 => array(
                'AppID' => '416624795',
                'Name' => 'Sinusoid',
                'Category' => 'Groove Box',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Tracker-style 4-track groove machine',
                'Manual Link' => 'N/A'
            ),
            177 => array(
                'AppID' => '623167340',
                'Name' => 'iFretless Guitar',
                'Category' => 'Guitar',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based guitar instrument with fretless note bending and velocity sensitivity',
                'Manual Link' => 'N/A'
            ),
            178 => array(
                'AppID' => '323813692',
                'Name' => 'Steel Guitar',
                'Category' => 'Guitar',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Expand with $3 IAPs or $10 for full features',
                'Manual Link' => 'http://www.yonac.com/steelguitar/manual.html'
            ),
            179 => array(
                'AppID' => '1064769019',
                'Name' => 'GeoShred',
                'Category' => 'Guitar',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Physical modeled guitar with grid performance surface, MIDI/MPE, finger vibrato, slide and fret scraping, VCF and feedback effects',
                'Manual Link' => 'https://www.youtube.com/playlist?list=PLBlsEMJbGRD4EXw-Ohaa3drcwg5Lz7Av0'
            ),
            180 => array(
                'AppID' => '845046209',
                'Name' => 'StompBox Band',
                'Category' => 'Guitar FX',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Guitar effects racks and pedal boards. Non-Band Edition is no longer of value.',
                'Manual Link' => 'N/A'
            ),
            181 => array(
                'AppID' => '1117291846',
                'Name' => 'ToneBridge Guitar Effects',
                'Category' => 'Guitar FX',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'No IAP, play your favorite songs in their original sound using your iPhone or iPad!',
                'Manual Link' => 'N/A'
            ),
            182 => array(
                'AppID' => '870269510',
                'Name' => 'ToneStack',
                'Category' => 'Guitar FX',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Expand with many $5 IAPs, full bundle is $85',
                'Manual Link' => 'http://www.yonac.com/tonestack/tonestack_manual.html'
            ),
            183 => array(
                'AppID' => '1378343729',
                'Name' => 'ApeMatrix',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A unique AU/IAA MIDI and audio routing tool with 10 slots on 3 Matrix grids + 2 bus slots per grid',
                'Manual Link' => 'http://www.apesoft.it/Manual/apeMatrix_user_guide.pdf'
            ),
            184 => array(
                'AppID' => '1094758623',
                'Name' => 'Audio Evolution Mobile Studio',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Advanced features are IAPs costing $2-$6, a portable multitrack audio/MIDI recording studio',
                'Manual Link' => 'http://www.audio-evolution.com/manual/doku.php?id=start'
            ),
            185 => array(
                'AppID' => '1129130361',
                'Name' => 'AudioBus 3',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Send live audio or MIDI from one Audiobus-compatible app to another, add effects, play with MIDI controllers, record the audio',
                'Manual Link' => 'https://audiob.us/app-support-3/help'
            ),
            186 => array(
                'AppID' => '1390361418',
                'Name' => 'AUHost',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Simple AU host for up to 3 effects to turn your device into a multi-FX processor',
                'Manual Link' => 'N/A'
            ),
            187 => array(
                'AppID' => '1055636344',
                'Name' => 'AUM',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Flexible audio mixer, recorder, and connection hub with MIDI and audio routing but no sequencer',
                'Manual Link' => 'http://kymatica.com/aum/help.html'
            ),
            188 => array(
                'AppID' => '1016291290',
                'Name' => 'Auria Pro',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Full audio/MIDI production studio with many IAP (proprietary format) plugins, note that only the Pro version offers MIDI sequencing',
                'Manual Link' => 'https://s3.amazonaws.com/auria.store/docs/Auria+Pro+User+Guide.pdf'
            ),
            189 => array(
                'AppID' => '1060317024',
                'Name' => 'BeatMaker 3',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Offers sound pack IAPs for $1-$7, groove-box style DAW with 16-pad performance input (compare to NI Maschine)',
                'Manual Link' => 'https://intua.net/downloads/BM3_Manual.pdf'
            ),
            190 => array(
                'AppID' => '583976519',
                'Name' => 'Cubasis 2',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A full featured iOS DAW with several IAP (proprietary format) plugins, built-in instruments, effects, MIDI and audio recording',
                'Manual Link' => 'https://www.steinberg.net/fileadmin/files/PRODUCTS/Apps/Cubasis/Cubasis_Help/Index.html'
            ),
            191 => array(
                'AppID' => '1018780185',
                'Name' => 'Ferrite Recording Studio',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Pro upgrade is $15 IAP (needed for AU), a multi-track audio recording app with effects and automation',
                'Manual Link' => 'http://service.wooji-juice.com/ferrite/user-guide/version/?v=2.0.2'
            ),
            192 => array(
                'AppID' => '432850619',
                'Name' => 'FL Studio Mobile',
                'Category' => 'Host',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sounds and instruments for $1-$4 IAP, loads as a plugin in desktop FL Studio to bring in iOS projects, complete multi-track DAW for audio and MIDI',
                'Manual Link' => 'https://www.image-line.com/support/flstudio_mobile_online_manual/'
            ),
            193 => array(
                'AppID' => '408709785',
                'Name' => 'GarageBand',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, full-featured recording studio with drums, synths, and audio recording',
                'Manual Link' => 'https://help.apple.com/garageband/ipad/2.3/'
            ),
            194 => array(
                'AppID' => '1294928298',
                'Name' => 'iMPC Pro 2',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Fuses innovative song creation with the iconic MPC workflow to create a full fledged song creation tool',
                'Manual Link' => 'http://retronyms.com/impcpro2/docs/'
            ),
            195 => array(
                'AppID' => '369873168',
                'Name' => 'iSequence HD',
                'Category' => 'Host',
                'AU' => '',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Self-contained electronic music studio',
                'Manual Link' => 'http://www.beepstreet.com/iseqhd/iSequence%20for%20iPad%20user%20manual%20printable.pdf'
            ),
            196 => array(
                'AppID' => '1189322675',
                'Name' => 'Klimper',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Multi-track MIDI sequencer with chord explorer, scale intelligence, built-in and plugin instruments, and MIDI export',
                'Manual Link' => 'N/A'
            ),
            197 => array(
                'AppID' => '1179319734',
                'Name' => 'KRFT',
                'Category' => 'Host',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A modular instrument for expressive music production built to challenge the two decade old paradigm of the multi-track DAW',
                'Manual Link' => 'http://learn-krft.studioamplify.com/docs/'
            ),
            198 => array(
                'AppID' => '417726727',
                'Name' => 'Meteor Multitrack Recorder',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Many FX and features are IAPs for $2-$10, up to 32-track DAW with mixer, multi-FX, audio and MIDI recording and editing',
                'Manual Link' => 'http://www.4pockets.com/PDF/MeteorManual1.6.pdf'
            ),
            199 => array(
                'AppID' => '1001532047',
                'Name' => 'midiSTEPs',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A powerful and fun MIDI step sequencer app that sends MIDI note and CC messages to other music apps and external synthesizers',
                'Manual Link' => 'http://artkerns.com/midiSTEPs-manual-1.5.pdf'
            ),
            200 => array(
                'AppID' => '966990643',
                'Name' => 'Modstep',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'MIDI sequencer host with internal drum sampler and synth',
                'Manual Link' => 'http://modstep.net/manual/'
            ),
            201 => array(
                'AppID' => '1108915352',
                'Name' => 'Moebius Lab',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A multimorphic sound processor with synth, sampler, 9 time domain effects, 6 spectral effects, 7 slots for external apps and 200 LFO modulators',
                'Manual Link' => 'http://apps.amazingnoises.com/wp-content/uploads/2016/07/Moebius_user_guide.pdf'
            ),
            202 => array(
                'AppID' => '776998585',
                'Name' => 'MultiTrackStudio',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Pro Extension is $20 IAP, Track Pack is $10, an audio/MIDI multitrack recording app with many included effects, pianoroll, drum, and score editors',
                'Manual Link' => 'https://www.multitrackstudio.com/ipad_manual.php'
            ),
            203 => array(
                'AppID' => '328608539',
                'Name' => 'Music Studio',
                'Category' => 'Host',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Additional  instruments as $4-$7 IAP, full iOS DAW, audio/MIDI recording and editing, up to 127 tracks, real-time effects, cross-platform',
                'Manual Link' => 'https://www.xewton.com/musicstudio/doc/'
            ),
            204 => array(
                'AppID' => '1160793386',
                'Name' => 'n-Track 9 Pro',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'iOS version of full-featured desktop DAW, unlimited track count, audio/MIDI, effects, editing, mixer',
                'Manual Link' => 'https://ntrack.com/ios-multitrack-manual.php'
            ),
            205 => array(
                'AppID' => '1161157818',
                'Name' => 'Orsilus',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Up to 64-channel DAW with visual mixer and circular sequencer, built-in effects, fixed 4/4 signature',
                'Manual Link' => 'N/A'
            ),
            206 => array(
                'AppID' => '1156213359',
                'Name' => 'Quantiloop Pro',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => '4-track live looper with effects, MIDI master/slave sync',
                'Manual Link' => 'http://quantiloop.com/wp-content/uploads/2018/09/quantiloop2.pdf'
            ),
            207 => array(
                'AppID' => '1240952241',
                'Name' => 'Sequencism',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'No IAP, simple multi-track MIDI sequencer and mixer with AU instrument and effect hosting',
                'Manual Link' => 'http://www.rodrigoroman.com/rrc2soft/sequencism/files/sequencismv1.0.pdf'
            ),
            208 => array(
                'AppID' => '1118842181',
                'Name' => 'Soda DJ App',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'DJ app with up to 8 decks, beatjumps, and effects',
                'Manual Link' => 'N/A'
            ),
            209 => array(
                'AppID' => '1422833890',
                'Name' => 'Stagelight: Audio and MIDI DAW',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'IAP feature unlock is $15 (AU support), ultimate unlock is $150 for cross-platform license and all sounds, a full-featured cross-platform DAW',
                'Manual Link' => 'N/A'
            ),
            210 => array(
                'AppID' => '1130726632',
                'Name' => 'TIZE',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Sound Packs are IAP for $1-$10, $5/mo sub for all sound packs, beat-oriented sampler/sequencer app',
                'Manual Link' => 'N/A'
            ),
            211 => array(
                'AppID' => '401438496',
                'Name' => 'Twisted Wave Audio Editor',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Audio editor app with recording and AU effect hosting',
                'Manual Link' => 'https://twistedwave.com/doc/index'
            ),
            212 => array(
                'AppID' => '1112601015',
                'Name' => 'NanoStudio 2',
                'Category' => 'Host',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'A complete in-the-box solution to production, Obsidian and Slate instruments, 11 included effects, tempo and time sig. tracks, complex bussing',
                'Manual Link' => 'N/A'
            ),
            213 => array(
                'AppID' => '1326331127',
                'Name' => 'Camelot Pro',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'A live performance & production tool connecting Hardware & Software Musical instruments to a single management system',
                'Manual Link' => 'https://camelotpro.com/support/'
            ),
            214 => array(
                'AppID' => '1130398188',
                'Name' => 'Addictive Pro',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Provides a unique form of Wavetable oscillators generated from harmonic content and free digital filter',
                'Manual Link' => 'N/A'
            ),
            215 => array(
                'AppID' => '447072653',
                'Name' => 'Addictive Synth',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Combines the synthesis power of Addictive Synth with a 4 track loop phrase recorder',
                'Manual Link' => 'http://www.virsyn.net/mobileapp/images/addictive/AddictiveSynth.pdf'
            ),
            216 => array(
                'AppID' => '471638724',
                'Name' => 'Animoog',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Powered by Moog’s new Anisotropic Synth Engine, is the first pro polysynth designed for iPad',
                'Manual Link' => 'https://api.moogmusic.com/sites/default/files/2018-10/AnimoogManual.pdf'
            ),
            217 => array(
                'AppID' => '999702563',
                'Name' => 'iDS-10',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Software emulation of Korg DS-10 hardware synth, includes an analog synth, voice synth, and drum machine',
                'Manual Link' => 'N/A'
            ),
            218 => array(
                'AppID' => '1245045964',
                'Name' => 'KASPAR',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'An 8-layer multi-timbral synth with 3 osc per layer, 20 waveforms per osc, 14 filter types, arpeggiator, dADSHR envelopes, chordmaker',
                'Manual Link' => 'http://www.yonac.com/kaspar/kaspar_manual.pdf'
            ),
            219 => array(
                'AppID' => '920832974',
                'Name' => 'Laplace Synthesizer',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A physical-modeling synthesizer based on resonator synthesis for making bowed string, plucked string, blown pipe and metallic sounds',
                'Manual Link' => 'http://www.icegear.net/laplace/manual/'
            ),
            220 => array(
                'AppID' => '1016055431',
                'Name' => 'Lorentz Synthesizer',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Analog modeling synth with a resonator for metallic and aggressive sounds, Has Saw, Pulse, Sub, Noise and High Pass Filter',
                'Manual Link' => 'http://www.icegear.net/lorentz/manual/'
            ),
            221 => array(
                'AppID' => '1084197093',
                'Name' => 'Mersenne Synthesizer',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A melodic percussion synthesizer that combines two FM synthesis modules, a noise generator and a resonator',
                'Manual Link' => 'http://www.icegear.net/mersenne/manual/'
            ),
            222 => array(
                'AppID' => '864041340',
                'Name' => 'Mitosynth',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Synthesis without the spaghetti, 180 presets, additive, wavetable, DADSR envelopes, mod matrix, sequencer, XY pads',
                'Manual Link' => 'http://service.wooji-juice.com/mitosynth/Mitosynth-Manual.pdf'
            ),
            223 => array(
                'AppID' => '1253419004',
                'Name' => 'Reason Compact',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Unlock is $10 IAP, $1 sound packs, mis-named app is really Europa from desktop Reason, preset compatible with desktop',
                'Manual Link' => 'N/A'
            ),
            224 => array(
                'AppID' => '1165470423',
                'Name' => 'Redshrike Synthesizer',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A poly synth that combines a resonator for complicated sound creation and subtraction synthesis with an FM oscillator that creates violent distortion',
                'Manual Link' => 'http://www.icegear.net/redshrike/manual/'
            ),
            225 => array(
                'AppID' => '1254353266',
                'Name' => 'Synthmaster One',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Same as dekstop version, preset compatible with desktop version, semi-modular synth with all the trimmings',
                'Manual Link' => 'N/A'
            ),
            226 => array(
                'AppID' => '1175892734',
                'Name' => 'SynthScaper',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A 3-osc w/ 3 layers per osc & 6 voices per layer, built-in or custom samples can be loaded into each osc, per-orc arp/seq, 6 env, 6 LFO, FX',
                'Manual Link' => 'https://motion-soundscape.blogspot.com/'
            ),
            227 => array(
                'AppID' => '488577050',
                'Name' => 'TC-11',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'The only fully programmable multi-touch synthesizer for the iPad, 160 presets, device motion, and on-board modules',
                'Manual Link' => 'http://www.bitshapesoftware.com/instruments/tc-11/tc-11-user-guide-2.0.pdf'
            ),
            228 => array(
                'AppID' => '660195946',
                'Name' => 'Thor Polysonic Synthesizer',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Thor Synth from Reason ported to iOS, preset compatible with desktop version, over 1000 presets',
                'Manual Link' => 'https://www.propellerheads.com/products/thor/manual/introduction/'
            ),
            229 => array(
                'AppID' => '385498073',
                'Name' => 'Xenon Synthesizer',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Hybrid Polyphonic Synthesizer (VA, FM, Formant, PCM(112)) 2OSC + FILTER + AMP + 4LFO + 8ENV',
                'Manual Link' => 'http://www.icegear.net/xenon/xenon_manual_v1_7_0.pdf'
            ),
            230 => array(
                'AppID' => '1029416579',
                'Name' => 'Group the Loop',
                'Category' => 'Loop Tool',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Intelligent audio looping for the iPad, AUv3 support is only for hosting FX',
                'Manual Link' => 'N/A'
            ),
            231 => array(
                'AppID' => '470885300',
                'Name' => 'Loopmash HD',
                'Category' => 'Loop Tool',
                'AU' => '',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Slice and swap hits from up to 8 4-bar loops to piece together all new drum parts or even crazy melody lines with stutters, reverse, tape stops, etc.',
                'Manual Link' => 'N/A'
            ),
            232 => array(
                'AppID' => '1187609531',
                'Name' => 'ReSlice',
                'Category' => 'Loop Tool',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Slice your audio samples and create flexible musical atoms which can be triggered by MIDI notes or touch',
                'Manual Link' => 'N/A'
            ),
            233 => array(
                'AppID' => '1245652090',
                'Name' => 'AudioMaster Pro',
                'Category' => 'Mastering',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Automated mastering tool with customizable EQ',
                'Manual Link' => 'N/A'
            ),
            234 => array(
                'AppID' => '519867260',
                'Name' => 'Remaster',
                'Category' => 'Mastering',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => '7-band EQ and compressor with render to file and audiocopy and paste',
                'Manual Link' => 'N/A'
            ),
            235 => array(
                'AppID' => '993650909',
                'Name' => 'Arpeggist',
                'Category' => 'MIDI FX',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'MIDI Note arpeggiator with random sequence generator, up to 32 steps, polyphonic, chord generator, scale selection, tie, accent, transpose',
                'Manual Link' => 'N/A'
            ),
            236 => array(
                'AppID' => '1440149545',
                'Name' => 'Autony',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A clever algorithm creates a musical sequence which is output as a midi signal which can be used to drive a software or a hardware device',
                'Manual Link' => 'N/A'
            ),
            237 => array(
                'AppID' => '1378195291',
                'Name' => 'FAC Envolver',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Envelope follower to MIDI CC effect unit',
                'Manual Link' => 'http://fredantoncorvest.com/FAC_Envolver.html'
            ),
            238 => array(
                'AppID' => '1437919435',
                'Name' => 'KB-1 MIDI Keyboard',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'An expressive virtual keyboard designed for a multitude of scenarios, includes MPE support',
                'Manual Link' => 'N/A'
            ),
            239 => array(
                'AppID' => '1422324067',
                'Name' => 'Midi Echo AU',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Offers 0-20 mutable MIDI-based echoes with adjustable type, velocity, pitch and time intervals, alternate MIDI channel, MIDI thru',
                'Manual Link' => 'N/A'
            ),
            240 => array(
                'AppID' => '1409156444',
                'Name' => 'Physicles',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, a container of physics-based AU MIDI plugins to send control data based on moving on-screen objects',
                'Manual Link' => 'http://www.rodrigoroman.com/rrc2soft/physicles/files/PhysiclesApp.pdf'
            ),
            241 => array(
                'AppID' => '1439713799',
                'Name' => 'QuantiChord',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A MIDI effect that generates chords from incoming notes and quantizes the results to a pre-defined scale',
                'Manual Link' => 'http://dev.laurentcolson.com/medias/QuantiChord/en/QuantiChord.pdf'
            ),
            242 => array(
                'AppID' => '1435691909',
                'Name' => 'Riffer',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Creative MIDI sequencer generates patterns and melodies, choose scales, complexity, steps, start and end, playback motion, set pitch, etc',
                'Manual Link' => 'N/A'
            ),
            243 => array(
                'AppID' => '1347099452',
                'Name' => 'RouteMIDI',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'AU plug-in to route MIDI to an external instrument',
                'Manual Link' => 'http://www.appouttime.com/'
            ),
            244 => array(
                'AppID' => '1292546479',
                'Name' => 'Rozeta Sequencer Suite',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => '9 AU MIDI sequencer plugins: Bassline, Rhythm, X0X, LFO, XY, Arpeggio, Particles, Cells, Collider',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/Rozeta_Setup_Guide-1.pdf'
            ),
            245 => array(
                'AppID' => '1409125865',
                'Name' => 'ScaleBud',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Scale-based MIDI controller plugin to keep notes and scales in key',
                'Manual Link' => 'N/A'
            ),
            246 => array(
                'AppID' => '1361313588',
                'Name' => 'StepPolyArp Unit',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'A real-time MIDI arpeggiator with auto pattern generation and built-in sound bank',
                'Manual Link' => 'http://dev.laurentcolson.com/medias/StepPolyArp/en/StepPolyArp-Unit.pdf'
            ),
            247 => array(
                'AppID' => '1398712641',
                'Name' => 'StreamByter',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Programmable MIDI routing, filtering, and event automation unit - a build-your-own MIDI effect platform',
                'Manual Link' => 'https://audeonic.com/streambyter/manual/'
            ),
            248 => array(
                'AppID' => '504740787',
                'Name' => 'Suggester',
                'Category' => 'MIDI FX',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Full unlock is $8 IAP, MIDI chord progression suggestion tool with 4 built-in instruments (piano, e. piano, strings, guitar)',
                'Manual Link' => 'http://www.mathieurouthier.com/suggester_ios/'
            ),
            249 => array(
                'AppID' => '655513441',
                'Name' => 'Thesys',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Same as dekstop version, a MIDI step sequencer with velocity, modulation, and various performance effects',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Thesys_iPad.pdf'
            ),
            250 => array(
                'AppID' => '1045058006',
                'Name' => 'Poseidon Synth',
                'Category' => 'Misc Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Combination of analog and spectral modellilng synthesis with unique F-domain filter and spatializer',
                'Manual Link' => 'N/A'
            ),
            251 => array(
                'AppID' => '1439844878',
                'Name' => 'auGEN X',
                'Category' => 'Misc Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Starting as a precision test utility, now a full-featured audio oscillator, a high quality noise generator, and an impulse generator with MIDI input',
                'Manual Link' => 'http://www.audspr.com/apps/G1/'
            ),
            252 => array(
                'AppID' => '984597969',
                'Name' => 'AnalogKit',
                'Category' => 'Modular Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Includes 50+ components to build your own synth, user community sharing, direct audio interface and MIDI support',
                'Manual Link' => 'N/A'
            ),
            253 => array(
                'AppID' => '1027525593',
                'Name' => 'Audulus 3',
                'Category' => 'Modular Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Modular synth/effect app with nearly 100 built-in Eurorack-style modules, a complete sound design playground',
                'Manual Link' => 'http://docs.audulus.com/'
            ),
            254 => array(
                'AppID' => '1202932254',
                'Name' => 'DA ONE',
                'Category' => 'Modular Synth',
                'AU' => '',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Powerful synthesis engine combining digital and virtual analog methods, wavetable synthesis, vector waveform mixing, subtractive, additive, and FM',
                'Manual Link' => 'N/A'
            ),
            255 => array(
                'AppID' => '1070850573',
                'Name' => 'KQ MiniSynth',
                'Category' => 'Modular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Virtual modular synth with ability to add/remove up to 100 modules',
                'Manual Link' => 'https://www.kiraqtech.jp/en/kqminisynth/modules'
            ),
            256 => array(
                'AppID' => '1041465860',
                'Name' => 'Model 15',
                'Category' => 'Modular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Each facet of the Moog Model 15 modular synthesizer has been meticulously recreated in this app',
                'Manual Link' => 'http://model-15-user-manual.webflow.io/'
            ),
            257 => array(
                'AppID' => '1207806723',
                'Name' => 'Ripplemaker',
                'Category' => 'Modular Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'West Coast Flavored Modular Synth with modules, such as complex oscillator, lowpass gate, FM, mathematical utilities and slope generator',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/ripplemaker_guide.pdf'
            ),
            258 => array(
                'AppID' => '898308034',
                'Name' => 'Tera Synth',
                'Category' => 'Modular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Explore new sound spaces that go beyond the emulation of synthesizer legends',
                'Manual Link' => 'http://www.virsyn.net/mobileapp/images/ts/terasynth.pdf'
            ),
            259 => array(
                'AppID' => '926789929',
                'Name' => 'zMors Modular',
                'Category' => 'Modular Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Can host AUv3 plugins and connect to DAW apps with IAA',
                'Manual Link' => 'http://www.zmors.de/zMors_Modular_Manual.pdf'
            ),
            260 => array(
                'AppID' => '1235647874',
                'Name' => 'Alien Box',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'New kind of audio effect never heard before, a modulation effect compared to flanger, phaser or chorus but it is not like any of them',
                'Manual Link' => 'N/A'
            ),
            261 => array(
                'AppID' => '1435323754',
                'Name' => 'Auto Wah',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Can perform many different filtering effects but primarily simulates a traditional WahWah pedal, free running or input level controlled',
                'Manual Link' => 'N/A'
            ),
            262 => array(
                'AppID' => '996308227',
                'Name' => 'Cactus Chorus',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A two-stage chorus effect with stereo crossover',
                'Manual Link' => 'N/A'
            ),
            263 => array(
                'AppID' => '1381246923',
                'Name' => 'DLYM - Delay Modulator',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, delay modulator plugin which produces flanger and chorus style effects taking inspiration from DRC’s chorus effect, and expanding on it',
                'Manual Link' => 'https://www.imaginando.pt/products/dlym/help/contents'
            ),
            264 => array(
                'AppID' => '1031178668',
                'Name' => 'Emo Chorus',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Realistic Choir simulator ranging from simple Chorus emulation to full ensemble Choir with 128 members',
                'Manual Link' => 'N/A'
            ),
            265 => array(
                'AppID' => '1230164766',
                'Name' => 'FAC Chorus',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A versatile chorus effect emulation designed to simulate the characteristics of the classic chorus modules',
                'Manual Link' => 'http://fredantoncorvest.com/FAC_Chorus.html'
            ),
            266 => array(
                'AppID' => '1431664432',
                'Name' => 'Flanger',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Stereo analog flanger capable of creating a range of subtle chorus to extreme flanging effects',
                'Manual Link' => 'N/A'
            ),
            267 => array(
                'AppID' => '1300412261',
                'Name' => 'Foxglove Flanger',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A 60\'s style through-zero flanger effect with pre-process saturation and high shelf filtering',
                'Manual Link' => 'N/A'
            ),
            268 => array(
                'AppID' => '1354422212',
                'Name' => 'FS Refraktor',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Somewhere between a delay and a flanger, flexible sixteen step sequencer and LFO, slew control to vary delay time',
                'Manual Link' => 'N/A'
            ),
            269 => array(
                'AppID' => '1198341561',
                'Name' => 'Lofionic Mani Chorus',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A rich and evocative analogue-modelled chorus effect with standard mix, rate and depth controls, plus switchable feedback and pre-delay controls',
                'Manual Link' => 'N/A'
            ),
            270 => array(
                'AppID' => '1431653191',
                'Name' => 'Phaser',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A stereo analog phaser capable of creating a range of phasing similar to traditional analog effects of old',
                'Manual Link' => 'N/A'
            ),
            271 => array(
                'AppID' => '1441807530',
                'Name' => 'PhaseThree',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'A detailed model of the MuTron Bi-Phase with added 12-stage phasors',
                'Manual Link' => 'N/A'
            ),
            272 => array(
                'AppID' => '990917846',
                'Name' => 'Phlox Phaser',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A stereo phase shifting audio effect',
                'Manual Link' => 'N/A'
            ),
            273 => array(
                'AppID' => '1268360218',
                'Name' => 'QuatroMod',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Classic Liquid through-zero flanger, Fluid multi-mod chorus, Vapor diffusion chorus, and FreqShift frequency shifter',
                'Manual Link' => 'N/A'
            ),
            274 => array(
                'AppID' => '1275344965',
                'Name' => 'Ringabell AU',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Comb filter and ring modulator effect',
                'Manual Link' => 'N/A'
            ),
            275 => array(
                'AppID' => '1249305395',
                'Name' => 'Stereo Phaser',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'In stereo mode the signal is split and run through 2 phaser effects with different frequency settings but same rate, depth and feedback',
                'Manual Link' => 'N/A'
            ),
            276 => array(
                'AppID' => '940079014',
                'Name' => 'Svep',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'No IAP, stereo modulation filter effect suitable for any sound that includes phaser, flanger, and chorus',
                'Manual Link' => 'N/A'
            ),
            277 => array(
                'AppID' => '1018626610',
                'Name' => 'Tiger-lily Tremelo',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A two-stage harmonic and amplitude tremolo effect with variable wave-shaping and phase-offset parameters',
                'Manual Link' => 'N/A'
            ),
            278 => array(
                'AppID' => '1130683829',
                'Name' => 'VC-1',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Advanced multi-stage chorus effect with 3 different algorithms, 3-band split input capability, multiple modulation types',
                'Manual Link' => 'N/A'
            ),
            279 => array(
                'AppID' => '1253371776',
                'Name' => 'Vibrato',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Classic vibrato and chorus effect',
                'Manual Link' => 'N/A'
            ),
            280 => array(
                'AppID' => '1431730020',
                'Name' => 'Vintage Vibe',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A dopplar or Leslie speaker style effect for shimmering or stereo widening',
                'Manual Link' => 'N/A'
            ),
            281 => array(
                'AppID' => '1056863629',
                'Name' => 'Zero Chorus',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A high quality Roland Dimension D style chorus plug-in with a feedback control enabling flanging effects',
                'Manual Link' => 'http://blamsoft.com/wp-content/uploads/2015/11/ZeroChorusUserManual100.pdf'
            ),
            282 => array(
                'AppID' => '1436855751',
                'Name' => 'RM-1 Wave Modulator',
                'Category' => 'Modulation',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Multi-modulation app with carrier oscillator, multi-mode filter, envelope follower, and low frequency oscillator',
                'Manual Link' => 'N/A'
            ),
            283 => array(
                'AppID' => '1173816162',
                'Name' => 'AudioEffX',
                'Category' => 'Multi FX',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Seven studio quality effect modules including chorus, delay, drive, para EQ, flanger, phaser, and reverb',
                'Manual Link' => 'N/A'
            ),
            284 => array(
                'AppID' => '681772221',
                'Name' => 'Effectrix',
                'Category' => 'Multi FX',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Same as desktop version, a professional multi-effect sequencer with 14 intelligent effects across a sequencer matrix',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Effectrix.pdf'
            ),
            285 => array(
                'AppID' => '1151339601',
                'Name' => 'Shaper',
                'Category' => 'Multi FX',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A multi-fx processor that allows you to redefine or totally destroy any kind of source',
                'Manual Link' => 'https://k-devices.com/products/ios-shaper/'
            ),
            286 => array(
                'AppID' => '614418823',
                'Name' => 'Turnado',
                'Category' => 'Multi FX',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => 'X',
                'Description' => 'Same as dekstop version, 8-knob realtime multi FX unit designed for live performance audio mangling, XY pad control',
                'Manual Link' => 'http://downloads.sugar-bytes.de/manuals/Turnado.pdf'
            ),
            287 => array(
                'AppID' => '892220800',
                'Name' => 'iSymphonic Orchestra',
                'Category' => 'Orchestra',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Includes a wide variety of strings plus brass, woodwinds, and full orchestra sounds. 10 other sets available as IAP for $9-$25.',
                'Manual Link' => 'http://doc.crudebyte.com/iSymphonic/'
            ),
            288 => array(
                'AppID' => '1376362836',
                'Name' => 'Galileo Organ 2',
                'Category' => 'Organ',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Organ Essentials Bundle (10 addt\'l FX) is $4.99 IAP, tonewheel/transistor organ modeling with drawbars and scanner vibrato/chorus emulation',
                'Manual Link' => 'http://www.yonac.com/galileo2/galileo2_manual.pdf'
            ),
            289 => array(
                'AppID' => '925910220',
                'Name' => 'iCathedral Organ',
                'Category' => 'Organ',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Full cathedral pipe organ with individually controllable stops',
                'Manual Link' => 'http://doc.crudebyte.com/iCathedral/'
            ),
            290 => array(
                'AppID' => '566874816',
                'Name' => 'CMP Grand Piano',
                'Category' => 'Piano',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Includes grand and jazz pianos. Additional IAP models are Concert Grand ($8.99) and Upright ($4.99)',
                'Manual Link' => 'N/A'
            ),
            291 => array(
                'AppID' => '1122637899',
                'Name' => 'Colossus Piano',
                'Category' => 'Piano',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Piano sample set player where each piano model is a separate IAP between $10 and $50',
                'Manual Link' => 'https://doc.crudebyte.com/Colossus-Piano/'
            ),
            292 => array(
                'AppID' => '1246941963',
                'Name' => 'Neo-Soul Keys Studio',
                'Category' => 'Piano',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Sample-based electric piano with Vintage Keyboard FX',
                'Manual Link' => 'N/A'
            ),
            293 => array(
                'AppID' => '966586407',
                'Name' => 'Ravenscroft 275 Piano',
                'Category' => 'Piano',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based piano instrument sampled from a Ravenscroft Grand',
                'Manual Link' => 'N/A'
            ),
            294 => array(
                'AppID' => '1151446394',
                'Name' => 'Tines',
                'Category' => 'Piano',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Electric piano emulation with internal effects like a stereo tremolo, a multiband distortion panel and a subtle roomy reverb',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/tines_docs.pdf'
            ),
            295 => array(
                'AppID' => '647764727',
                'Name' => 'Auto-Tune Mobile',
                'Category' => 'Pitch',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Based on Antares\' Auto-Tune technology, a pitch correction app for vocalists',
                'Manual Link' => 'N/A'
            ),
            296 => array(
                'AppID' => '1215312953',
                'Name' => 'BandShift',
                'Category' => 'Pitch',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Multi-band auditory filter and frequency shifter taking a new approach to manipulate the pitch of complex sound sources in realtime',
                'Manual Link' => 'N/A'
            ),
            297 => array(
                'AppID' => '1345946446',
                'Name' => 'Discord4',
                'Category' => 'Pitch',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Pitch shifter with buffer size control, delay, reverb, modulation, true stereo, and MIDI control',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Discord_4.0_Manual.pdf?6749438070871726237'
            ),
            298 => array(
                'AppID' => '1209475596',
                'Name' => 'Harmonizer',
                'Category' => 'Pitch',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Real time audio pitch shifter effect that can mix harmonies into the original signal or run as realtime pitch shifter',
                'Manual Link' => 'N/A'
            ),
            299 => array(
                'AppID' => '1348742174',
                'Name' => 'Harmonizr',
                'Category' => 'Pitch',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Vocal harmonizer where you can set the key centers and it will do the rest, with up to  3 voices of automatic harmony. MIDI input for custom harmony.',
                'Manual Link' => 'N/A'
            ),
            300 => array(
                'AppID' => '1220061889',
                'Name' => 'Harmony Eight',
                'Category' => 'Pitch',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Up to eight pitch shifted voices are created from vocal input or instruments with spatial positioning for each',
                'Manual Link' => 'N/A'
            ),
            301 => array(
                'AppID' => '532501340',
                'Name' => 'Harmony Voice',
                'Category' => 'Pitch',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Pitch shifter and harmonizer with tuning correction, up to 4 voice harmonies, manual or automatic, reverb, chorus, delay',
                'Manual Link' => 'N/A'
            ),
            302 => array(
                'AppID' => '1440468366',
                'Name' => 'Pitch Shifter AUv3 Plugin',
                'Category' => 'Pitch',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Stereo pitch shifter with +/-12 semitone range, fine detune, level, balance controls',
                'Manual Link' => 'N/A'
            ),
            303 => array(
                'AppID' => '1289165912',
                'Name' => 'Brusfi',
                'Category' => 'Restoration',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A highly advanced audio noise reducer, packed into a simple and straight-forward interface using multiple fine-tuned gates',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/brusfri_docs.pdf'
            ),
            304 => array(
                'AppID' => '1373926760',
                'Name' => 'ADverb 2',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'An accurate model of a vintage digital plate reverb rack unit from the 80s, with a few modern tricks up its sleeve',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/ADverb_Manual.pdf?17122938535659177802'
            ),
            305 => array(
                'AppID' => '670248970',
                'Name' => 'AudioReverb',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Algorithmic reverberation app which combines the flexibility of vintage algorithmic reverbs with the sonic quality of convolution based reverbs',
                'Manual Link' => 'N/A'
            ),
            306 => array(
                'AppID' => '1122066024',
                'Name' => 'Envelope AU Reverb by DDMF',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'True stereo reverb with 8 room models which can be tweaked in size, predelay, depth, L/H frequency content, stereo width, and dry-wet control',
                'Manual Link' => 'N/A'
            ),
            307 => array(
                'AppID' => '1252122327',
                'Name' => 'Eos 2',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Consists of four high-quality custom-designed reverb algorithms, three different plate simulators and custom Superhall algorithm',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Eos_2.0_Manual.pdf?5118342754606650609'
            ),
            308 => array(
                'AppID' => '1330949875',
                'Name' => 'FS FreezeVerb',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Lush sounding stereo reverb, perfect for both subtle ambience and cavernous reverberation and freeze mode for infinte reverb loops',
                'Manual Link' => 'N/A'
            ),
            309 => array(
                'AppID' => '887408942',
                'Name' => 'GliderVerb',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Initially free, full version is $7 IAP. “Reverberator with Glissandos” simulating a room gradually changing its shape',
                'Manual Link' => 'http://www.apesoft.it/Manual/GliderVerb_user_guide.pdf'
            ),
            310 => array(
                'AppID' => '1438836422',
                'Name' => 'Kleverb',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Algorithmic reverb effect with 3 room sizes, selectable reflection filter, modulation, damping, diffusion, dry signal ducking',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/kleverb_docs.pdf'
            ),
            311 => array(
                'AppID' => '1438893987',
                'Name' => 'RatshackReverb3',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Detailed recreation of the Realistic Electronic Reverb, accurate analog "bucket-brigade" style delay mode, presets compaitble with desktop version',
                'Manual Link' => 'N/A'
            ),
            312 => array(
                'AppID' => '950600083',
                'Name' => 'Reverb FDN',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A Feedback Delay Network (FDN) Reverb Effect, which can create nice reverberated ambiences, from small rooms to huge buildings',
                'Manual Link' => 'http://www.apesoft.it/Manual/Reverb_user_guide.pdf'
            ),
            313 => array(
                'AppID' => '1097763239',
                'Name' => 'RF-1',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A collection of algorithmic reverbs capable of creating a variety of effects ranging from small rooms to huge, heavily modulated spaces',
                'Manual Link' => 'http://numericalaudio.com/rf1/manual/index.html'
            ),
            314 => array(
                'AppID' => '1435046962',
                'Name' => 'Stereo Reverb',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A digital stereo reverb with low and high pass filtering as well as independent damping, stereo panning of reverb trails, and an optional pan feature',
                'Manual Link' => 'N/A'
            ),
            315 => array(
                'AppID' => '1051938245',
                'Name' => 'Zero Reverb',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A high quality Feedback Delay Network reverberator with rich feedback with smooth decay for a modern hall-like reverb character',
                'Manual Link' => 'http://blamsoft.com/wp-content/uploads/2015/10/ZeroReverbUserManual100.pdf'
            ),
            316 => array(
                'AppID' => '828068679',
                'Name' => 'HDS iSound',
                'Category' => 'ROMpler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Sound packs are $20-$60 IAP, includes 5 sound packs, Accordion, Styrian button-Box, Oberkrainer-Guitar, Baritone, Gaudi',
                'Manual Link' => 'N/A'
            ),
            317 => array(
                'AppID' => '1011132019',
                'Name' => 'Noise',
                'Category' => 'ROMpler',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Sound sets are $4-$10 IAPs, ROMpler compatible with ROLI BLOCKS devices',
                'Manual Link' => 'N/A'
            ),
            318 => array(
                'AppID' => '952549036',
                'Name' => 'SOUND Canvas',
                'Category' => 'ROMpler',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Same as hardware and dektop apps, a Roland Sound Canvas for your iOS device',
                'Manual Link' => 'N/A'
            ),
            319 => array(
                'AppID' => '1263088043',
                'Name' => 'Syntronik',
                'Category' => 'ROMpler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => '25 presets free, each model is $10 or full for $80 IAP, 17 synths and 37 effects',
                'Manual Link' => 'N/A'
            ),
            320 => array(
                'AppID' => '1102521881',
                'Name' => 'Turbosounds for Accordian',
                'Category' => 'ROMpler',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Sound sets are $45 IAPs each, one free starter pack is included',
                'Manual Link' => 'N/A'
            ),
            321 => array(
                'AppID' => '338977566',
                'Name' => 'Thumbjam',
                'Category' => 'ROMpler',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Over 40 high-quality real instruments multi-sampled exclusively, hundreds of included scales, accelerometer control, export to Ardour',
                'Manual Link' => 'http://thumbjam.com/docs.php'
            ),
            322 => array(
                'AppID' => '1381478666',
                'Name' => 'AudioLayer',
                'Category' => 'Sampler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A full featured open standard audio multi-sampler with streaming engine, iCloud integration, and multi scope editing',
                'Manual Link' => 'N/A'
            ),
            323 => array(
                'AppID' => '388149926',
                'Name' => 'Bismark BS-16i',
                'Category' => 'Sampler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => '$4.99 IAP for high-res, $2.99 IAP for 128 poly, 16-part multi-timbral playback sampler for SoundFont and DLS',
                'Manual Link' => 'N/A'
            ),
            324 => array(
                'AppID' => '833671355',
                'Name' => 'E-l-s-a',
                'Category' => 'Sampler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Retro style sampling keyboard with tempo based looping, reversing, reverb, resonant filter, and sample rate/bit crusher',
                'Manual Link' => 'N/A'
            ),
            325 => array(
                'AppID' => '1279045883',
                'Name' => 'Soundfruuze',
                'Category' => 'Sampler',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'An exprerimental live sampler / looper / granular and FFT scrub effect',
                'Manual Link' => 'http://soundfruuze.com/reference/'
            ),
            326 => array(
                'AppID' => '1307609511',
                'Name' => 'Streemur',
                'Category' => 'Sampler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Internet audio streaming plugin',
                'Manual Link' => 'N/A'
            ),
            327 => array(
                'AppID' => '1279011478',
                'Name' => 'Xequence | MIDI Workstation',
                'Category' => 'Sequencer',
                'AU' => '',
                'IAA' => '',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Professional, fast & stable MIDI sequencer, arranger & controller',
                'Manual Link' => 'http://seven.systems/xequence/manual/'
            ),
            328 => array(
                'AppID' => '1166114782',
                'Name' => 'Haaze',
                'Category' => 'Stereo Mod',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Hass and split-EQ stereo widening tool',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/haaze_docs.pdf'
            ),
            329 => array(
                'AppID' => '1370816026',
                'Name' => 'Stereo Modulator',
                'Category' => 'Stereo Mod',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Effect that converts mono sound into stereo, with an adjustable width and optional stereo modulation',
                'Manual Link' => 'N/A'
            ),
            330 => array(
                'AppID' => '1307155984',
                'Name' => 'VirtualForest',
                'Category' => 'Stereo Mod',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Binaural 3D audio placement and reverb unit, but instead of sounding like you\'re in a room it sounds like you\'re in a forest',
                'Manual Link' => 'N/A'
            ),
            331 => array(
                'AppID' => '1285558162',
                'Name' => 'VirtualRoom AU',
                'Category' => 'Stereo Mod',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'AU-only version of binaural 3D audio placement and reverb unit',
                'Manual Link' => 'N/A'
            ),
            332 => array(
                'AppID' => '1215321261',
                'Name' => 'VirtualRoom Pro',
                'Category' => 'Stereo Mod',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Originally Audiobus only, now adds AU. Binaural 3D audio placement and reverb unit',
                'Manual Link' => 'N/A'
            ),
            333 => array(
                'AppID' => '945125583',
                'Name' => 'Oriental Strings',
                'Category' => 'String',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => '32 different string sounds from the orient and middle east',
                'Manual Link' => 'http://doc.crudebyte.com/iSymphonic/'
            ),
            334 => array(
                'AppID' => '1036045790',
                'Name' => 'Alina String Ensemble',
                'Category' => 'String Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'The sound is in reference to Solina String Ensemble manufactured by N.V. EMINENT BODEGRAVEN HOLLAND in the 70’s',
                'Manual Link' => 'N/A'
            ),
            335 => array(
                'AppID' => '1254465919',
                'Name' => 'Plectrum AU',
                'Category' => 'String Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A classic emulation of plucked string instruments',
                'Manual Link' => 'N/A'
            ),
            336 => array(
                'AppID' => '993782289',
                'Name' => 'Strng',
                'Category' => 'String Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Karplus-Strong physical string modeling synthesizer with 16-voice polyphony, ADSR, ping-pong delay, detuning, LFO-controlled LP filter',
                'Manual Link' => 'N/A'
            ),
            337 => array(
                'AppID' => '1441529484',
                'Name' => 'Audio Shredder AUv3 Plugin',
                'Category' => 'Switch Gate',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Trance gate style effect with separate gate per stereo channel, envelope and filters',
                'Manual Link' => 'N/A'
            ),
            338 => array(
                'AppID' => '1382134258',
                'Name' => 'Perforator',
                'Category' => 'Switch Gate',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A rhythmic gating audio effect that will creatively snip, cut, gap and filter incoming audio to create rhythmic patterns out of sustained sounds',
                'Manual Link' => 'http://ruismaker.com/wp-content/uploads/Perforator_Guide.pdf'
            ),
            339 => array(
                'AppID' => '1205284497',
                'Name' => 'Tone Generator',
                'Category' => 'Utility',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Generate audio signals and control the volume, waveform and frequency in real time with no pops or clicks',
                'Manual Link' => 'N/A'
            ),
            340 => array(
                'AppID' => '1440416251',
                'Name' => 'Helium Speaker : realtime',
                'Category' => 'Vocal FX',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A realtime voice changer with 2 modes and 8-bit sound',
                'Manual Link' => 'N/A'
            ),
            341 => array(
                'AppID' => '950058913',
                'Name' => 'Voice Rack: FX',
                'Category' => 'Vocal FX',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A real-time vocal multi-effects processor that can be used live or connected to other music apps',
                'Manual Link' => 'N/A'
            ),
            342 => array(
                'AppID' => '1391057304',
                'Name' => 'DerVoco',
                'Category' => 'Vocoder',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Vintage vocoder emulation that uses analog modelled components including filters, envelope followers and companders to create a warm sound',
                'Manual Link' => 'http://beepstreet.com/public/downloads/DerVocoManual.pdf'
            ),
            343 => array(
                'AppID' => '490511069',
                'Name' => 'Voice Synth',
                'Category' => 'Vocoder',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Vocoder and auto-pitcher with MIDI, multi-voice harmonizer, formant shifting, 24-band EQ, and 250 presets',
                'Manual Link' => 'N/A'
            ),
            344 => array(
                'AppID' => '1098787951',
                'Name' => 'VoxSyn',
                'Category' => 'Vocoder',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A 22-channel vocoder with hex keyboard or external MIDI input, reverb, chorus, delay, distortion, phaser',
                'Manual Link' => 'N/A'
            ),
            345 => array(
                'AppID' => '819266128',
                'Name' => 'microTERA',
                'Category' => 'Waveshaping Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Waveshaping Synthesis is a type of distortion synthesis that can create dynamic spectra in a controlled way',
                'Manual Link' => 'N/A'
            ),
            346 => array(
                'AppID' => '596036905',
                'Name' => 'Nave',
                'Category' => 'Waveshaping Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Two wavetable oscillators with all factory wavetables from Microwave, Wave and Blofeld included',
                'Manual Link' => 'https://waldorfmusic.com/downloads/Nave/Manuals/nave-manual.pdf'
            ),
            347 => array(
                'AppID' => '1155545387',
                'Name' => 'Pads',
                'Category' => 'Waveshaping Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A wavetable synthesizer with a noise/grain generator, high cut filter, and waveform detuner',
                'Manual Link' => 'https://storage.googleapis.com/klevgrandweb.appspot.com/docs/pads_docs.pdf'
            ),
            348 => array(
                'AppID' => '1234530974',
                'Name' => 'PPG Infinite',
                'Category' => 'Waveshaping Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Wavetable synth with 24db LP filter, 2 VCA with stereo out and effects, 10 envelopes, 4 LFOs and a modulation matrix',
                'Manual Link' => 'http://wolfgangpalm.com/Infinite/iosInfiniteManual.pdf'
            ),
            349 => array(
                'AppID' => '1278439277',
                'Name' => 'Scythe Synthesizer',
                'Category' => 'Waveshaping Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A number of preset and feature IAPs for $1-$5, powerful wavetable synthesizer, Max waves = 128 = 8 voices x 2 oscillators x 8 unison',
                'Manual Link' => 'https://www.bitmaskstudio.com/wp-content/uploads/2018/08/Scythe-Manual-1.pdf'
            ),
            350 => array(
                'AppID' => '431097161',
                'Name' => 'Shapesynth',
                'Category' => 'Waveshaping Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A polyphonic synthesiser allowing the user to draw the shape of the oscillator waveform',
                'Manual Link' => 'N/A'
            ),
            351 => array(
                'AppID' => '818477094',
                'Name' => 'Sparkle',
                'Category' => 'Waveshaping Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Cross-synthesis tool for advanced spectral hybridizations made of several algorithms that operate on frequency domain',
                'Manual Link' => 'http://www.apesoft.it/Manual/Sparkle_user_guide.pdf'
            ),
            352 => array(
                'AppID' => '554998576',
                'Name' => 'WaveGenerator',
                'Category' => 'Waveshaping Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A 3-osc, 256-field, per-osc scannable wavetable synth with picture-to-wavetable sound creation, 24dB LPF with overdrive, 13 envelopes, 4 LFOs',
                'Manual Link' => 'http://wolfgangpalm.com/mediafiles/2012/09/wavegenerator_help_final4.pdf'
            ),
            353 => array(
                'AppID' => '591816731',
                'Name' => 'WaveMapper',
                'Category' => 'Waveshaping Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Object-based wavetable mapping synth with delay, reverb, arpeggiator, 24dB LPF with overdrive, 13 envelopes, 4 LFOs',
                'Manual Link' => 'http://wolfgangpalm.com/mediafiles/2013/01/WaveMapper_Manual.pdf'
            ),
            354 => array(
                'AppID' => '1445356061',
                'Name' => 'EG WaveSHAPER',
                'Category' => 'Waveshaping Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Two free-draw wavetables with 2 fully-assignable LFOs and 2 envelopes, reverb delay and crush distortion, MIDI CC and AU automation',
                'Manual Link' => 'https://www.elliottgarage.com/manuals/waveShaperHelp.pdf'
            ),
            355 => array(
                'AppID' => '1321742688',
                'Name' => 'Shire Whistle',
                'Category' => 'Whistle',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'An authentic virtual Irish Whistle with true legato slurs and slides',
                'Manual Link' => 'N/A'
            ),
            356 => array(
                'AppID' => '681765126',
                'Name' => 'iFretless Sax',
                'Category' => 'Woodwinds',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based woodwind instrument focused on saxaphones that also works with MIDI wind controllers',
                'Manual Link' => 'N/A'
            ),
            357 => array(
                'AppID' => '1186361516',
                'Name' => 'Sensual Sax',
                'Category' => 'Woodwinds',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Sample-based saxaphone instrument with reverb, vibrato, delay, legato, sustain, and staccato',
                'Manual Link' => 'N/A'
            ),
            358 => array(
                'AppID' => '1444652196',
                'Name' => 'MIDISpy',
                'Category' => 'Utility',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, a handy little utility for monitoring MIDI connectivity',
                'Manual Link' => 'N/A'
            ),
            359 => array(
                'AppID' => '1449463241',
                'Name' => 'Magic Reverb : Audio Unit EFX',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A natural sounding reverb audio effect with sharp, time, EFX, clean, and ring controls',
                'Manual Link' => 'N/A'
            ),
            360 => array(
                'AppID' => '1446209019',
                'Name' => 'MIDI Tools',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A suite of 8 MIDI AU plguins for velocity/aftertouch manipulation, key zoning, monitor, de-ghost, routing, bussing, latching, and clone/filter',
                'Manual Link' => 'http://audioveek.com/'
            ),
            361 => array(
                'AppID' => '1445569079',
                'Name' => 'SynthScaper LE',
                'Category' => 'Hybrid Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A special lightweight version of SynthScaper, 3 sound engines with spatial mixer, seq/arp per generator, MIDI control, preset compatible with non-LE',
                'Manual Link' => 'https://drive.google.com/file/d/1jfLMuDgc0xh4vfo_rVQKX4KEvMAD2Vii/view'
            ),
            362 => array(
                'AppID' => '1381233927',
                'Name' => 'MixxMaster',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'No IAP, simple DAW app with built-in guitar, piano, and drum sounds, MIDI editing and gesture control',
                'Manual Link' => 'https://docs.wixstatic.com/ugd/951b40_c2a0601e4aec41538315cc9a9f445a1c.pdf'
            ),
            363 => array(
                'AppID' => '1450147164',
                'Name' => 'Atomizer AUv3 Plugin',
                'Category' => 'Granulizer',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A great plugin for adding beat synced glitch and stuttering, pitch shifting and various forms of filtering effects',
                'Manual Link' => 'N/A'
            ),
            364 => array(
                'AppID' => '1358113198',
                'Name' => 'Pen2Bow',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Converts Apple Pencil drawing into MIDI notes as well as inputs of velocity, tilt, force, and orientation to MIDI CC controller data.',
                'Manual Link' => 'N/A'
            ),
            365 => array(
                'AppID' => '1418236738',
                'Name' => 'CuSnP',
                'Category' => 'String Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, a sympathetic string simulation excited by input audio causing them to resonate much like the open strings on a piano',
                'Manual Link' => 'N/A'
            ),
            366 => array(
                'AppID' => '1418930761',
                'Name' => 'LRC5',
                'Category' => 'EQ',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, a 5-band parametric EQ with low/high shelves, 24dB boost or cut, 10Hz-20kHz range, mono or stereo operation',
                'Manual Link' => 'N/A'
            ),
            367 => array(
                'AppID' => '1452052628',
                'Name' => 'WoodLofier',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Quad distortion effect with filtering (and sample rate reduction), tape wobble, noise addition and crushing (clipping, bit reduction and saturation).',
                'Manual Link' => 'http://www.woodmansimmaculatemaplesyrupstudio.be/woodlofier/WoodLofierHelp.pdf'
            ),
            368 => array(
                'AppID' => '1451968439',
                'Name' => 'Shimmer AUv3 Audio Plugin',
                'Category' => 'Multi FX',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Delay and pitch shifter effect creates an etherial wall of sound and with beat-sync modulation, harmonic exciter, and sustain',
                'Manual Link' => 'N/A'
            ),
            369 => array(
                'AppID' => '1441542979',
                'Name' => 'Photon AU',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Record MIDI, save/export MIDI files, load MIDI files from AirDrop, load up to 4 pads and playback with variation, load MIDI as groove quantize',
                'Manual Link' => 'http://amssoftware.org/manual/PhotonManual.pdf'
            ),
            370 => array(
                'AppID' => '1451192046',
                'Name' => 'mfxConvert',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Convert just about any MIDI data into any other type of MIDI data in real time',
                'Manual Link' => 'https://audeonic.com/mfx/'
            ),
            371 => array(
                'AppID' => '1451193551',
                'Name' => 'mfxMonitor',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'No IAP, display MIDI events in real time',
                'Manual Link' => 'https://audeonic.com/mfx/'
            ),
            372 => array(
                'AppID' => '1451193898',
                'Name' => 'mfxPan',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Send MIDI PAN controller based on velocity, aftertouch, or CC data, set style, length, depth, and pre-delay of PAN control',
                'Manual Link' => 'https://audeonic.com/mfx/'
            ),
            373 => array(
                'AppID' => '1451194160',
                'Name' => 'mfxPitch',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Generate up to two separate additional pitched note lines each with it\'s own delay and level, +/- 2 octaves,',
                'Manual Link' => 'https://audeonic.com/mfx/'
            ),
            374 => array(
                'AppID' => '1451194722',
                'Name' => 'mfxStrip',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Filter and remap channels, remap notes, transpose. change poly keyboard to mono',
                'Manual Link' => 'https://audeonic.com/mfx/'
            ),
            375 => array(
                'AppID' => '1451195511',
                'Name' => 'mfxWobble',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Trigger pitch band with note or aftertouch events, set amount, pre-delay, and cycle time',
                'Manual Link' => 'https://audeonic.com/mfx/'
            ),
            376 => array(
                'AppID' => '1448509525',
                'Name' => 'BLEASS delay AUv3 Audio Plugin',
                'Category' => 'Delay',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Delay effect with tempo sync and ping pong, frequency shifter, dual filters, and per-stage LFO',
                'Manual Link' => 'N/A'
            ),
            377 => array(
                'AppID' => '1439913588',
                'Name' => 'Beatformer',
                'Category' => 'Dyn - Transient',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Effortlessly shape and instantly transform your beats with just 4 intuitive knobs - Boom, Punch, Squash, Air',
                'Manual Link' => 'https://accusonus.com/manuals/beatformer'
            ),
            378 => array(
                'AppID' => '1453556216',
                'Name' => 'Xequence AU | Pads',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Drum pad controller plugin, 26 factory drum maps, allows custom maps to be saved, 1x1 to 8x8, position to velocity, glide trigger',
                'Manual Link' => 'http://www.seven.systems/xequence/manual/#drum-maps'
            ),
            379 => array(
                'AppID' => '1453028249',
                'Name' => 'Xequence AU | Keys',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Keyboard controller plugin, scale aware with 70+ scales, adjustable key width, position to velocity, glide trigger, MIDI CC ribbons',
                'Manual Link' => 'http://www.seven.systems/xequence/manual/#keyboard'
            ),
            380 => array(
                'AppID' => '1439815017',
                'Name' => 'Polythemus AU',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Turns your midi chords into mono midi channels so you can allocate polyphonic notes (i.e. chords) into different synth patches',
                'Manual Link' => 'N/A'
            ),
            381 => array(
                'AppID' => '1452838999',
                'Name' => 'NPD',
                'Category' => 'Misc Synth',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Phase distortion synth, 3 osc w/ shape/harmonic, noise osc, 2 filters, 3 envelopes, 2 stereo LFOs, mod matrix, distortion, phaser, chorus, delay',
                'Manual Link' => 'https://nikolozi.com/apps/npd/help'
            ),
            382 => array(
                'AppID' => '1454932009',
                'Name' => 'Esoteric Synth',
                'Category' => 'Misc Synth',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A 5 osc multi-AM/multi-FM synth with modulation inversion, event and grain modes with duration and density, frequency rescaling',
                'Manual Link' => 'http://www.anthonydifuria.com/Manuals/Esoteric_Synth_UserGuide.pdf'
            ),
            383 => array(
                'AppID' => '1449640589',
                'Name' => 'Enso Looper',
                'Category' => 'Loop Tool',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Inspired by modern looper pedals and vintage tape-based units, smooth forward/reverse with independant speed control, saturation, filter, chorus FX',
                'Manual Link' => 'https://cdn.shopify.com/s/files/1/1550/9885/files/Enso_1.0_Manual.pdf?2552148719562941801'
            ),
            384 => array(
                'AppID' => '1456474953',
                'Name' => 'Chameleon AUv3 Sampler Plugin',
                'Category' => 'Sampler',
                'AU' => 'X',
                'IAA' => 'X',
                'AB' => '',
                'Link' => '',
                'Description' => 'Recording sampler with on-board reverb, digital delay and chorus effects, 4 XY touch pads for control, import samples from iOS files app',
                'Manual Link' => 'N/A'
            ),
            385 => array(
                'AppID' => '1456540213',
                'Name' => 'WaveScope',
                'Category' => 'Analyzer',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Waveform visualizer that is beat-synched to the host and uses Metal framework to render on GPU and free up CPU resources',
                'Manual Link' => 'N/A'
            ),
            386 => array(
                'AppID' => '817419955',
                'Name' => 'Elastic Drums',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'A 6-channel drum synth with 13 different percussion engines, 4 effect channels, parameter automation, master effects, 16-step sequencer',
                'Manual Link' => 'N/A'
            ),
            387 => array(
                'AppID' => '1014191410',
                'Name' => 'Fugue Machine',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'The world’s first multi-playhead piano roll, play your sequence with up to four playheads at once, each at various speeds, directions, and pitches',
                'Manual Link' => 'N/A'
            ),
            388 => array(
                'AppID' => '681672176',
                'Name' => 'SeekBeats Drum Machine Synth',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => '$5 IAP for addt\'l FX, n 8-voice drum synth with per-drum outputs, step sequencer, randomizer, snapshots, chorus, compression, distortion',
                'Manual Link' => 'N/A'
            ),
            389 => array(
                'AppID' => '1206804871',
                'Name' => 'Future Drummer',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Sample-based drum app for electronic music, sequencer with MIDI out, jamming algorithm, live pads, multi FX suite, over 100 multilayer sounds',
                'Manual Link' => 'N/A'
            ),
            390 => array(
                'AppID' => '943915646',
                'Name' => 'FLUX:FX by Adrian Belew',
                'Category' => 'Multi FX',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Multi FX app with 31 studio-quality effects, chain up to 5, touch-based automation sequencer, large multi-point XY controller',
                'Manual Link' => 'http://flux.noii.se/manual/'
            ),
            391 => array(
                'AppID' => '464783893',
                'Name' => 'SampleTank',
                'Category' => 'ROMpler',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'IAP for all sounds is $30, includes 140 instruments and 1000 patterns, 8 instrument slots with layer and split, 8-track MIDI recorder',
                'Manual Link' => 'N/A'
            ),
            392 => array(
                'AppID' => '870386229',
                'Name' => 'AltiSpace',
                'Category' => 'Reverb',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Convolution reverb app with user impulse response loading, 400 presets modeling 24 reverb devices, plate, spring, hall, room, stereo width',
                'Manual Link' => 'N/A'
            ),
            393 => array(
                'AppID' => '963852820',
                'Name' => 'Hexaglyphics Noise Generator',
                'Category' => 'Misc Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A 13-bit noise generator that can turn gestures into noise sweeps, beeps, zaps/clicks, squarish oscillations and abstract sounds',
                'Manual Link' => 'https://www.youtube.com/watch?v=F1ihoFJyPRE'
            ),
            394 => array(
                'AppID' => '324462544',
                'Name' => 'SunVox',
                'Category' => 'Modular Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A small and fast cross-platform modular synthesizer with pattern based sequencer (tracker), many types of oscillators and effects',
                'Manual Link' => 'http://www.warmplace.ru/wiki/sunvox:manual_en'
            ),
            395 => array(
                'AppID' => '530162824',
                'Name' => 'DrumJam',
                'Category' => 'Drum',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => 'X',
                'Description' => 'Drum app with dozens of looped instruments each with up to 20 patterns, filter, pitch bend, delay, reverb, lofi, and distortion effects',
                'Manual Link' => 'https://drumjamapp.com/docs.php'
            ),
            396 => array(
                'AppID' => '408288370',
                'Name' => 'Crystal Synth XT',
                'Category' => 'Hybrid Synth',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A full featured semi-modular synthesizer, same as desktop and patch sharing compatible, subtractive, FM, wavetable, granular',
                'Manual Link' => 'http://www.greenoak.com/crystal/tutorial.html'
            ),
            397 => array(
                'AppID' => '1447100877',
                'Name' => 'Mellotronics Streetlytron Pro',
                'Category' => 'ROMpler',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'Mellotron emulator that includes a massive collection of 90 tapes, with 65 drawn from Streetly\'s Production Masters',
                'Manual Link' => 'N/A'
            ),
            398 => array(
                'AppID' => '859121707',
                'Name' => 'Crystalline - Shimmer Reverb Effects Processor',
                'Category' => 'Reverb',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A shimmer reverb/delay effect, performance XY pad controls, 16 delay modes, effect ducking, BPM sync, stereo independent',
                'Manual Link' => 'N/A'
            ),
            399 => array(
                'AppID' => '736436952',
                'Name' => 'Swoopster - Fuzz Flanger Effects Processor',
                'Category' => 'Modulation',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A flanger, fuzz, and vibrato effect, performance XY pad controls, positive and negative feedback, stereo independence, MIDI preset change',
                'Manual Link' => 'N/A'
            ),
            400 => array(
                'AppID' => '791454067',
                'Name' => 'Stereo Designer - Stereo Shaping Processor',
                'Category' => 'Stereo Mod',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A multi-purpose stereo shaping tool, performance XY pad controls, stereoizing, M/S processing, widening, phase inversion',
                'Manual Link' => 'N/A'
            ),
            401 => array(
                'AppID' => '883581594',
                'Name' => 'Caramel - Crunch and Crusher Effects Processor',
                'Category' => 'Distortion',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A stereo distortion, crusher and fattener effect, performance XY pad controls, Crunch, Crush, Girth, SIzzle controls, stereo independence',
                'Manual Link' => 'N/A'
            ),
            402 => array(
                'AppID' => '962689306',
                'Name' => 'Johnny - Multiwave Tremolo Effects Processor',
                'Category' => 'Modulation',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'A stereo multiwave tremolo effect, performance XY pad controls, Rate, Depth, Shape, and Multiwave parameters, stereo independence',
                'Manual Link' => 'N/A'
            ),
            403 => array(
                'AppID' => '573511415',
                'Name' => 'Echo Pad - Multi Effects Processor',
                'Category' => 'Delay',
                'AU' => '',
                'IAA' => 'X',
                'AB' => 'X',
                'Link' => '',
                'Description' => 'An "echo centric" multi effects processor, performance XY pad controls, 5 delay types with Decimator, Flanger, Distortion,Smooth Filter, Loopers',
                'Manual Link' => 'http://www.holdernessmedia.com/home/ios-applications/music/echo-pad/echo-pad-support/manual'
            ),
            404 => array(
                'AppID' => '1445018791',
                'Name' => 'SynthJacker',
                'Category' => 'Host',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'An autosampler that plays back a MIDI sequence you specify, records the audio, and slices it into multiple sample files to load into any sampler',
                'Manual Link' => 'N/A'
            ),
            405 => array(
                'AppID' => '1453673283',
                'Name' => 'STARK Amp Simulator',
                'Category' => 'Guitar FX',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A fully fledged amplifier simulator consisting of four modules: Amplifier (12 types), Cabinet (10 types), Room (6 types) and effects slots (14 types)',
                'Manual Link' => 'https://ams3.digitaloceanspaces.com/klevgr/downloads/stark/stark_docs.pdf?AWSAccessKeyId=4HDP64L7PATNLQWM5ESG&Signature=G8EEybOAYzZ75zqKDCpj8N1fc1Y%3D&Expires=1554218693'
            ),
            406 => array(
                'AppID' => '1321744091',
                'Name' => 'Ocarina Amaya',
                'Category' => 'Flute',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Virtual ocarina instrument',
                'Manual Link' => 'N/A'
            ),
            407 => array(
                'AppID' => '1455200044',
                'Name' => 'Atom | Piano Roll',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Piano roll sequencer that works as an AU MIDI plugin, loop record, step input, editing tools, non-destructive quantize, scales, dynamic stretching',
                'Manual Link' => 'http://audioveek.com/atom-piano-roll-overview/'
            ),
            408 => array(
                'AppID' => '1458704222',
                'Name' => 'Harmonic Exciter AUv3 Plugin',
                'Category' => 'Exciter',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Exciter effect, adds harmonics to brighten a sound, per-harmonic faders allow precise control',
                'Manual Link' => 'N/A'
            ),
            409 => array(
                'AppID' => '1457212864',
                'Name' => 'BLEASS reverb AUv3 AudioPlugin',
                'Category' => 'Reverb',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Unique sounding reverb effect with size modulation and length controls, X/Y pad controlled frequency shifter and wave shaper, wet signal ducking',
                'Manual Link' => 'N/A'
            ),
            410 => array(
                'AppID' => '1448694455',
                'Name' => 'Cality',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A creative midi processor, add swing or accents, quantise pitch, use a probability gate or use the cloud module to add notes all under midi control',
                'Manual Link' => 'N/A'
            ),
            411 => array(
                'AppID' => '1453104408',
                'Name' => 'StepBud - AUv3 MIDI Sequencer',
                'Category' => 'MIDI FX',
                'AU' => 'X/M',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'MIDI step sequencer with unlimited number of steps, per-step velocity, rate, gate time, modulation, pitch bend, and portamento, snap to key/scale',
                'Manual Link' => 'N/A'
            ),
            412 => array(
                'AppID' => '1458633968',
                'Name' => 'FAC Bandit',
                'Category' => 'Multi FX',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'A 3-band multiband effect processor with adjustable x-over points, Saturator, Lofi and Ring Modulator modules to start, more effects to come',
                'Manual Link' => 'N/A'
            ),
            413 => array(
                'AppID' => '1459922086',
                'Name' => 'FuxxBox',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Modelled on a physical based algorithm and low level coding for state of the art performance and sound quality',
                'Manual Link' => 'N/A'
            ),
            414 => array(
                'AppID' => '1459915172',
                'Name' => 'WaverSine',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Modelled on a physical based algorithm and low level coding for state of the art performance and sound quality',
                'Manual Link' => 'N/A'
            ),
            415 => array(
                'AppID' => '1459886730',
                'Name' => 'ModulatorSquare',
                'Category' => 'Distortion',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Modelled on a physical based algorithm and low level coding for state of the art performance and sound quality',
                'Manual Link' => 'N/A'
            ),
            416 => array(
                'AppID' => '1459615373',
                'Name' => 'Stereo Lag',
                'Category' => 'Stereo Mod',
                'AU' => 'X',
                'IAA' => '',
                'AB' => '',
                'Link' => '',
                'Description' => 'Puts a small delay between the left and right channels',
                'Manual Link' => 'N/A'
            ),
        );

        foreach($tab_apps as $app){
            $audioapp = new audioapp();
            $audioapp->setAppid($app['AppID']);
            $audioapp->setName($app['Name']);

            $categorie = $this->repository->findOneByNom($app['Category']);

            $audioapp->setCategorie($categorie);

            if($app['AU'] == 'X'){
                $audioapp->setAU(true);
            }
            if($app['IAA'] == 'X'){
                $audioapp->setIAA(true);
            }
            if($app['AB'] == 'X'){
                $audioapp->setAB(true);
            }
            if($app['Link'] == 'X'){
                $audioapp->setLink(true);
            }            
            $audioapp->setSoftdescription($app['Description']);
            $audioapp->setManual($app['Manual Link']);

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



            $manager->persist($audioapp);
        }

        $manager->flush();
    }


    
    public function getDependencies()
    {
        return array(
            CategorieFixtures::class,
        );
    }
}
