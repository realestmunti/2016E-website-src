<?php
header("content-type: text/plain"); 
ob_start();?>

pcall(function() game:GetService("InsertService"):SetFreeModelUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?type=fm&q=%s&pg=%d&rs=%d") end)
pcall(function() game:GetService("InsertService"):SetFreeDecalUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?type=fd&q=%s&pg=%d&rs=%d") end)

game:GetService("ScriptInformationProvider"):SetAssetUrl("http://www.rdx.ct8.pl/asset/")
game:GetService("InsertService"):SetBaseSetsUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?nsets=10&type=base")
game:GetService("InsertService"):SetUserSetsUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?nsets=20&type=user&userid=%d")
game:GetService("InsertService"):SetCollectionUrl("http://www.roblox.com/Game/Tools/InsertAsset.ashx?sid=%d")
game:GetService("InsertService"):SetAssetUrl("http://www.rdx.ct8.pl/asset/?id=%d")
game:GetService("InsertService"):SetAssetVersionUrl("http://www.roblox.com/Asset/?assetversionid=%d")

pcall(function() game:GetService("SocialService"):SetFriendUrl("http://www.rdx.ct8.pl/game/LuaWebService/HandleSocialRequest.ashx?method=IsFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetBestFriendUrl("http://www.rdx.ct8.pl/game/LuaWebService/HandleSocialRequest.ashx?method=IsBestFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupUrl("http://www.rdx.ct8.pl/game/LuaWebService/HandleSocialRequest.ashx?method=IsInGroup&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRankUrl("http://www.rdx.ct8.pl/game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRank&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRoleUrl("http://www.rdx.ct8.pl/game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRole&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("GamePassService"):SetPlayerHasPassUrl("http://www.rdx.ct8.pl/game/GamePass/GamePassHandler.ashx?Action=HasPass&UserID=%d&PassID=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetProductInfoUrl("https://www.rdx.ct8.pl/marketplace/productinfo?assetId=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetPlayerOwnsAssetUrl("https://www.rdx.ct8.pl/ownership/hasasset?userId=%d&assetId=%d") end)

game:GetService("ScriptContext"):AddStarterScript(37801172) 

<?php
$data = "\r\n" . ob_get_clean();
$key = file_get_contents("../qtkey5151515.pem");
openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);
echo "--%" . base64_encode($sig) . "%" . $data;
?>