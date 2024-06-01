# 2016E Website SRC
Makes the client playable with this SRC. Mostly self made or stolen.
# Requirements
A webserver, and PHP.
# Changing the client to work
No. Either self teach yourself, or use patching guides.
# Changing the Private Key
You mostly need a private key. This can be changed in "game/qtkeylol5151515.pem".
# Changing the Security
Same as private key method, but you need to modifiy "GetAllowedSecurityVersions", and "GetAllowedMD5Hashes" to match your client MD5, and version.
# Changing the FFlags (Fast Flags)
This is in "Setting/QuietGet". Change the "ClientAppSettings" or "ClientSharedSettings" to your client's FFlags. Default FFlags are 2016L/2016E.
