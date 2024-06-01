<?php
    header("Content-Type: text/plain");

    $username = $_GET["username"];
    $server = $_GET["server"];
    $charapps = $_GET["charapps"];
    $rank = $_GET["rank"];
    $userid = $_GET["userid"];

    function get_signature($script)
    {
        $signature = "";
        openssl_sign($script, $signature, file_get_contents("../qtkeylol5151515.pem"), OPENSSL_ALGO_SHA1);
        return base64_encode($signature);
    }

    $joinscript = [
        "ClientPort" => 0,
        "MachineAddress" => $server,
        "ServerPort" => 53640,
        "PingUrl" => "",
        "PingInterval" => 30,
        "UserName" => $username,
        "SeleniumTestMode" => false,
        "UserId" => $userid,
        "SuperSafeChat" => false,
        "CharacterAppearance" => $charapps,
        "ClientTicket" => "",
        "GameId" => 1818,
        "PlaceId" => 1818,
        "MeasurementUrl" => "",
        "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
        "BaseUrl" => "http://www.fle.ct8.pl/",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => "0",
        "ScreenShotInfo" => "",
        "VideoInfo" => "<?xml version=\"1.0\"?><entry xmlns=\"http://www.w3.org/2005/Atom\" xmlns:media=\"http://search.yahoo.com/mrss/\" xmlns:yt=\"http://gdata.youtube.com/schemas/2007\"><media:group><media:title type=\"plain\"><![CDATA[ROBLOX Place]]></media:title><media:description type=\"plain\"><![CDATA[ For more games visit http://www.roblox.com]]></media:description><media:category scheme=\"http://gdata.youtube.com/schemas/2007/categories.cat\">Games</media:category><media:keywords>ROBLOX, video, free game, online virtual world</media:keywords></media:group></entry>",
        "CreatorId" => "1",
        "CreatorTypeEnum" => "User",
        "MembershipType" => $rank,
        "AccountAge" => "365",
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => true,
        "IsRobloxPlace" => false,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => false,
        "SessionId" => "",
        "DataCenterId" => 0,
        "UniverseId" => 3,
        "BrowserTrackerId" => 0,
        "UsePortraitMode" => false,
        "FollowUserId" => 0,
        "characterAppearanceId" => 1
    ];

    $data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    $signature = get_signature("\r\n" . $data);
    exit("--rbxsig%". $signature . "%\r\n" . $data);
?>