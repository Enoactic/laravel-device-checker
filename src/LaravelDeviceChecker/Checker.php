<?php

namespace LaravelDeviceChecker;

use Jenssegers\Agent\Agent;

class Checker
{
    static function getAgent()
    {
        return new Agent();
    }

    static function getDeviceType()
    {
        $agent = new Agent();
        if($agent->isTablet())
        {
            $deviceType = "Tablet";
        }
        else if($agent->isMobile())
        {
            $deviceType = "Mobile";
        }
        else if($agent->isPhone())
        {
            $deviceType = "Phone";
        }
        else if($agent->isRobot())
        {
            $deviceType = "Robot";
        }
        else if($agent->isDesktop())
        {
            $deviceType = "Desktop";
        }
        else
        {
            $deviceType = "Undefined";
        }
        return $deviceType;
    }

    static function getDeviceModel()
    {
        $agent = new Agent();
        if($agent->isiPhone())
        {
            $deviceModel="iPhone";
        }
        else if($agent->isBlackBerry())
        {
            $deviceModel="BlackBerry";
        }
        else if($agent->isHTC())
        {
            $deviceModel="HTC";
        }
        else if($agent->isNexus())
        {
            $deviceModel="Nexus";
        }
        else if($agent->isDell())
        {
            $deviceModel="Dell";
        }
        else if($agent->isMotorola())
        {
            $deviceModel="Motorola";
        }
        else if($agent->isSamsung())
        {
            $deviceModel="Samsung";
        }
        else if($agent->isLG())
        {
            $deviceModel="LG";
        }
        else if($agent->isSony())
        {
            $deviceModel="Sony";
        }
        else if($agent->isAsus())
        {
            $deviceModel="Asus";
        }
        else if($agent->isNokiaLumia())
        {
            $deviceModel="NokiaLumia";
        }
        else if($agent->isMicromax())
        {
            $deviceModel="Micromax";
        }
        else if($agent->isPalm())
        {
            $deviceModel="Palm";
        }
        else if($agent->isVertu())
        {
            $deviceModel="Vertu";
        }
        else if($agent->isPantech())
        {
            $deviceModel="Pantech";
        }
        else if($agent->isFly())
        {
            $deviceModel="Fly";
        }
        else if($agent->isWiko())
        {
            $deviceModel="Wiko";
        }
        else if($agent->isiMobile())
        {
            $deviceModel="iMobile";
        }
        else if($agent->isSimValley())
        {
            $deviceModel="SimValley";
        }
        else if($agent->isWolfgang())
        {
            $deviceModel="Wolfgang";
        }
        else if($agent->isAlcatel())
        {
            $deviceModel="Alcatel";
        }
        else if($agent->isNintendo())
        {
            $deviceModel="Nintendo";
        }
        else if($agent->isAmoi())
        {
            $deviceModel="Amoi";
        }
        else if($agent->isINQ())
        {
            $deviceModel="INQ";
        }
        else if($agent->isGenericPhone())
        {
            $deviceModel="GenericPhone";
        }
        else if($agent->isiPad())
        {
            $deviceModel="iPad";
        }
        else if($agent->isNexusTablet())
        {
            $deviceModel="NexusTablet";
        }
        else if($agent->isSamsungTablet())
        {
            $deviceModel="SamsungTablet";
        }
        else if($agent->isKindle())
        {
            $deviceModel="Kindle";
        }
        else if($agent->isSurfaceTablet())
        {
            $deviceModel="SurfaceTablet";
        }
        else if($agent->isHPTablet())
        {
            $deviceModel="HPTablet";
        }
        else if($agent->isAsusTablet())
        {
            $deviceModel="AsusTablet";
        }
        else if($agent->isBlackBerryTablet())
        {
            $deviceModel="BlackBerryTablet";
        }
        else if($agent->isHTCtablet())
        {
            $deviceModel="HTCtablet";
        }
        else if($agent->isMotorolaTablet())
        {
            $deviceModel="MotorolaTablet";
        }
        else if($agent->isNookTablet())
        {
            $deviceModel="NookTablet";
        }
        else if($agent->isAcerTablet())
        {
            $deviceModel="AcerTablet";
        }
        else if($agent->isToshibaTablet())
        {
            $deviceModel="ToshibaTablet";
        }
        else if($agent->isLGTablet())
        {
            $deviceModel="LGTablet";
        }
        else if($agent->isFujitsuTablet())
        {
            $deviceModel="FujitsuTablet";
        }
        else if($agent->isPrestigioTablet())
        {
            $deviceModel="PrestigioTablet";
        }
        else if($agent->isLenovoTablet())
        {
            $deviceModel="LenovoTablet";
        }
        else if($agent->isDellTablet())
        {
            $deviceModel="DellTablet";
        }
        else if($agent->isYarvikTablet())
        {
            $deviceModel="YarvikTablet";
        }
        else if($agent->isMedionTablet())
        {
            $deviceModel="MedionTablet";
        }
        else if($agent->isArnovaTablet())
        {
            $deviceModel="ArnovaTablet";
        }
        else if($agent->isIntensoTablet())
        {
            $deviceModel="IntensoTablet";
        }
        else if($agent->isIRUTablet())
        {
            $deviceModel="IRUTablet";
        }
        else if($agent->isMegafonTablet())
        {
            $deviceModel="MegafonTablet";
        }
        else if($agent->isEbodaTablet())
        {
            $deviceModel="EbodaTablet";
        }
        else if($agent->isAllViewTablet())
        {
            $deviceModel="AllViewTablet";
        }
        else if($agent->isArchosTablet())
        {
            $deviceModel="ArchosTablet";
        }
        else if($agent->isAinolTablet())
        {
            $deviceModel="AinolTablet";
        }
        else if($agent->isNokiaLumiaTablet())
        {
            $deviceModel="NokiaLumiaTablet";
        }
        else if($agent->isSonyTablet())
        {
            $deviceModel="SonyTablet";
        }
        else if($agent->isPhilipsTablet())
        {
            $deviceModel="PhilipsTablet";
        }
        else if($agent->isCubeTablet())
        {
            $deviceModel="CubeTablet";
        }
        else if($agent->isCobyTablet())
        {
            $deviceModel="CobyTablet";
        }
        else if($agent->isMIDTablet())
        {
            $deviceModel="MIDTablet";
        }
        else if($agent->isMSITablet())
        {
            $deviceModel="MSITablet";
        }
        else if($agent->isSMiTTablet())
        {
            $deviceModel="SMiTTablet";
        }
        else if($agent->isRockChipTablet())
        {
            $deviceModel="RockChipTablet";
        }
        else if($agent->isFlyTablet())
        {
            $deviceModel="FlyTablet";
        }
        else if($agent->isbqTablet())
        {
            $deviceModel="bqTablet";
        }
        else if($agent->isHuaweiTablet())
        {
            $deviceModel="HuaweiTablet";
        }
        else if($agent->isNecTablet())
        {
            $deviceModel="NecTablet";
        }
        else if($agent->isPantechTablet())
        {
            $deviceModel="PantechTablet";
        }
        else if($agent->isBronchoTablet())
        {
            $deviceModel="BronchoTablet";
        }
        else if($agent->isVersusTablet())
        {
            $deviceModel="VersusTablet";
        }
        else if($agent->isZyncTablet())
        {
            $deviceModel="ZyncTablet";
        }
        else if($agent->isPositivoTablet())
        {
            $deviceModel="PositivoTablet";
        }
        else if($agent->isNabiTablet())
        {
            $deviceModel="NabiTablet";
        }
        else if($agent->isKoboTablet())
        {
            $deviceModel="KoboTablet";
        }
        else if($agent->isDanewTablet())
        {
            $deviceModel="DanewTablet";
        }
        else if($agent->isTexetTablet())
        {
            $deviceModel="TexetTablet";
        }
        else if($agent->isPlaystationTablet())
        {
            $deviceModel="PlaystationTablet";
        }
        else if($agent->isTrekstorTablet())
        {
            $deviceModel="TrekstorTablet";
        }
        else if($agent->isPyleAudioTablet())
        {
            $deviceModel="PyleAudioTablet";
        }
        else if($agent->isAdvanTablet())
        {
            $deviceModel="AdvanTablet";
        }
        else if($agent->isDanyTechTablet())
        {
            $deviceModel="DanyTechTablet";
        }
        else if($agent->isGalapadTablet())
        {
            $deviceModel="GalapadTablet";
        }
        else if($agent->isMicromaxTablet())
        {
            $deviceModel="MicromaxTablet";
        }
        else if($agent->isKarbonnTablet())
        {
            $deviceModel="KarbonnTablet";
        }
        else if($agent->isAllFineTablet())
        {
            $deviceModel="AllFineTablet";
        }
        else if($agent->isPROSCANTablet())
        {
            $deviceModel="PROSCANTablet";
        }
        else if($agent->isYONESTablet())
        {
            $deviceModel="YONESTablet";
        }
        else if($agent->isChangJiaTablet())
        {
            $deviceModel="ChangJiaTablet";
        }
        else if($agent->isGUTablet())
        {
            $deviceModel="GUTablet";
        }
        else if($agent->isPointOfViewTablet())
        {
            $deviceModel="PointOfViewTablet";
        }
        else if($agent->isOvermaxTablet())
        {
            $deviceModel="OvermaxTablet";
        }
        else if($agent->isHCLTablet())
        {
            $deviceModel="HCLTablet";
        }
        else if($agent->isDPSTablet())
        {
            $deviceModel="DPSTablet";
        }
        else if($agent->isVistureTablet())
        {
            $deviceModel="VistureTablet";
        }
        else if($agent->isCrestaTablet())
        {
            $deviceModel="CrestaTablet";
        }
        else if($agent->isMediatekTablet())
        {
            $deviceModel="MediatekTablet";
        }
        else if($agent->isConcordeTablet())
        {
            $deviceModel="ConcordeTablet";
        }
        else if($agent->isGoCleverTablet())
        {
            $deviceModel="GoCleverTablet";
        }
        else if($agent->isModecomTablet())
        {
            $deviceModel="ModecomTablet";
        }
        else if($agent->isVoninoTablet())
        {
            $deviceModel="VoninoTablet";
        }
        else if($agent->isECSTablet())
        {
            $deviceModel="ECSTablet";
        }
        else if($agent->isStorexTablet())
        {
            $deviceModel="StorexTablet";
        }
        else if($agent->isVodafoneTablet())
        {
            $deviceModel="VodafoneTablet";
        }
        else if($agent->isEssentielBTablet())
        {
            $deviceModel="EssentielBTablet";
        }
        else if($agent->isRossMoorTablet())
        {
            $deviceModel="RossMoorTablet";
        }
        else if($agent->isiMobileTablet())
        {
            $deviceModel="iMobileTablet";
        }
        else if($agent->isTolinoTablet())
        {
            $deviceModel="TolinoTablet";
        }
        else if($agent->isAudioSonicTablet())
        {
            $deviceModel="AudioSonicTablet";
        }
        else if($agent->isAMPETablet())
        {
            $deviceModel="AMPETablet";
        }
        else if($agent->isSkkTablet())
        {
            $deviceModel="SkkTablet";
        }
        else if($agent->isTecnoTablet())
        {
            $deviceModel="TecnoTablet";
        }
        else if($agent->isJXDTablet())
        {
            $deviceModel="JXDTablet";
        }
        else if($agent->isiJoyTablet())
        {
            $deviceModel="iJoyTablet";
        }
        else if($agent->isFX2Tablet())
        {
            $deviceModel="FX2Tablet";
        }
        else if($agent->isXoroTablet())
        {
            $deviceModel="XoroTablet";
        }
        else if($agent->isViewsonicTablet())
        {
            $deviceModel="ViewsonicTablet";
        }
        else if($agent->isOdysTablet())
        {
            $deviceModel="OdysTablet";
        }
        else if($agent->isCaptivaTablet())
        {
            $deviceModel="CaptivaTablet";
        }
        else if($agent->isIconbitTablet())
        {
            $deviceModel="IconbitTablet";
        }
        else if($agent->isTeclastTablet())
        {
            $deviceModel="TeclastTablet";
        }
        else if($agent->isOndaTablet())
        {
            $deviceModel="OndaTablet";
        }
        else if($agent->isJaytechTablet())
        {
            $deviceModel="JaytechTablet";
        }
        else if($agent->isBlaupunktTablet())
        {
            $deviceModel="BlaupunktTablet";
        }
        else if($agent->isDigmaTablet())
        {
            $deviceModel="DigmaTablet";
        }
        else if($agent->isEvolioTablet())
        {
            $deviceModel="EvolioTablet";
        }
        else if($agent->isLavaTablet())
        {
            $deviceModel="LavaTablet";
        }
        else if($agent->isAocTablet())
        {
            $deviceModel="";
        }
        else if($agent->isMpmanTablet())
        {
            $deviceModel="AocTablet";
        }
        else if($agent->isCelkonTablet())
        {
            $deviceModel="CelkonTablet";
        }
        else if($agent->isWolderTablet())
        {
            $deviceModel="WolderTablet";
        }
        else if($agent->isMiTablet())
        {
            $deviceModel="MiTablet";
        }
        else if($agent->isNibiruTablet())
        {
            $deviceModel="NibiruTablet";
        }
        else if($agent->isNexoTablet())
        {
            $deviceModel="NexoTablet";
        }
        else if($agent->isLeaderTablet())
        {
            $deviceModel="LeaderTablet";
        }
        else if($agent->isUbislateTablet())
        {
            $deviceModel="UbislateTablet";
        }
        else if($agent->isPocketBookTablet())
        {
            $deviceModel="PocketBookTablet";
        }
        else if($agent->isKocasoTablet())
        {
            $deviceModel="KocasoTablet";
        }
        else if($agent->isHudl())
        {
            $deviceModel="Hudl";
        }
        else if($agent->isTelstraTablet())
        {
            $deviceModel="TelstraTablet";
        }
        else if($agent->isGenericTablet())
        {
            $deviceModel="GenericTablet";
        }
        else
        {
            $deviceModel = "Undefined";
        }
        return $deviceModel;
    }

    static function getDeviceOS()
    {
        $agent = new Agent();
        if($agent->isAndroidOS())
        {
            $deviceOS = "AndroidOS";
        }
        else if($agent->isBlackBerryOS())
        {
            $deviceOS = "BlackBerryOS";
        }
        else if($agent->isPalmOS())
        {
            $deviceOS = "PalmOS";
        }
        else if($agent->isSymbianOS())
        {
            $deviceOS = "SymbianOS";
        }
        else if($agent->isWindowsMobileOS())
        {
            $deviceOS = "WindowsMobileOS";
        }
        else if($agent->isWindowsPhoneOS())
        {
            $deviceOS = "WindowsPhoneOS";
        }
        else if($agent->isiOS())
        {
            $deviceOS = "iOS";
        }
        else if($agent->isMeeGoOS())
        {
            $deviceOS = "MeeGoOS";
        }
        else if($agent->isMaemoOS())
        {
            $deviceOS = "MaemoOS";
        }
        else if($agent->isJavaOS())
        {
            $deviceOS = "JavaOS";
        }
        else if($agent->iswebOS())
        {
            $deviceOS = "webOS";
        }
        else if($agent->isbadaOS())
        {
            $deviceOS = "badaOS";
        }
        else if($agent->isBREWOS())
        {
            $deviceOS = "BREWOS";
        }
        else
        {
            $deviceOS = "Undefined";
        }
        return $deviceOS;
    }
}
