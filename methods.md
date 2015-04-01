## AddFavoritePointToCache

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/AddFavoritePointToCache?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
)
```

## AddGeocachesToBookmarkList

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/AddGeocachesToBookmarkList

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [BookmarkListGuid] => 1627aea5-8e0a-4371-9022-9b504344e724
    [CacheCodes] => Array
        (
            [0] => String content
        )

)
```

## CreateFieldNoteAndPublish

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/CreateFieldNoteAndPublish

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [CacheCode] => String content
    [WptLogTypeId] => 9223372036854775807
    [UTCDateLogged] => /Date(928174800000-0700)/
    [Note] => String content
    [PromoteToLog] => 1
    [ImageData] => Array
        (
            [FileCaption] => String content
            [FileDescription] => String content
            [FileName] => String content
            [base64ImageData] => String content
        )

    [FavoriteThisCache] => 1
    [EncryptLogText] => 1
    [UpdatedLatitude] => 1.26743233E+15
    [UpdatedLongitude] => 1.26743233E+15
)
```

## CreateTrackableLog

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/CreateTrackableLog

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [CacheCode] => String content
    [TravelBugCode] => String content
    [TrackingNumber] => String content
    [UTCDateLogged] => /Date(928174800000-0700)/
    [Note] => String content
    [LogType] => 9223372036854775807
    [ImageData] => Array
        (
            [FileCaption] => String content
            [FileDescription] => String content
            [FileName] => String content
            [base64ImageData] => String content
        )

)
```

## DeleteCacheNote

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/DeleteCacheNote?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
)
```

## DeleteUserWaypoint

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/DeleteUserWaypoint?accessToken={ACCESSTOKEN}&waypointID={WAYPOINTID}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [waypointID] => {WAYPOINTID}
)
```

## GeocodeString

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GeocodeString

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [GeocodeString] => String content
)
```

## GetAPILimits

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetAPILimits?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetAnotherUsersProfile

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetAnotherUsersProfile

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [UserID] => 9223372036854775807
    [ProfileOptions] => Array
        (
            [ChallengesData] => 1
            [FavoritePointsData] => 1
            [GeocacheData] => 1
            [PublicProfileData] => 1
            [SouvenirData] => 1
            [TrackableData] => 1
        )

)
```

## GetAttributeTypesData

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetAttributeTypesData?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetBookmarkListByGuid

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetBookmarkListByGuid

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [BookmarkListGuid] => 1627aea5-8e0a-4371-9022-9b504344e724
)
```

## GetBookmarkListsByUserID

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetBookmarkListsByUserID?accessToken={ACCESSTOKEN}&userID={USERID}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [userID] => {USERID}
)
```

## GetBookmarkListsForUser

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetBookmarkListsForUser?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetCacheByTileGuid

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetCacheByTileGuid?accessToken={ACCESSTOKEN}&tileGuid={TILEGUID}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [tileGuid] => {TILEGUID}
)
```

## GetCacheIdsFavoritedByUser

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetCacheIdsFavoritedByUser?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetCachesFavoritedByUser

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetCachesFavoritedByUser?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetFullPocketQueryData

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetFullPocketQueryData?accessToken={ACCESSTOKEN}&pocketQueryGuid={POCKETQUERYGUID}&startItem={STARTITEM}&maxItems={MAXITEMS}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [pocketQueryGuid] => {POCKETQUERYGUID}
    [startItem] => {STARTITEM}
    [maxItems] => {MAXITEMS}
)
```

## GetGeocacheDataTypes

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetGeocacheDataTypes?accessToken={ACCESSTOKEN}&geocacheTypes={GEOCACHETYPES}&logTypes={LOGTYPES}&attributeTypes={ATTRIBUTETYPES}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [geocacheTypes] => {GEOCACHETYPES}
    [logTypes] => {LOGTYPES}
    [attributeTypes] => {ATTRIBUTETYPES}
)
```

## GetGeocacheLogsByCacheCode

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetGeocacheLogsByCacheCode?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}&startIndex={STARTINDEX}&maxPerPage={MAXPERPAGE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
    [startIndex] => {STARTINDEX}
    [maxPerPage] => {MAXPERPAGE}
)
```

## GetGeocacheStatus

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetGeocacheStatus

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [CacheCodes] => Array
        (
            [0] => String content
        )

)
```

## GetGeocacheTypes

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetGeocacheTypes?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetImagesForGeocache

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetImagesForGeocache?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
)
```

## GetMembershipTypes

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetMembershipTypes?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetMoreGeocaches

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetMoreGeocaches

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [IsLite] => 1
    [StartIndex] => 2147483647
    [MaxPerPage] => 2147483647
    [GeocacheLogCount] => 2147483647
    [TrackableLogCount] => 2147483647
    [IsSummaryOnly] => 1
)
```

## GetOwnedTrackables

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetOwnedTrackables

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [StartIndex] => 2147483647
    [MaxPerPage] => 2147483647
    [TrackableLogsCount] => 2147483647
    [CollectionOnly] => 1
)
```

## GetPocketQueryData

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetPocketQueryData?accessToken={ACCESSTOKEN}&pocketQueryGuid={POCKETQUERYGUID}&startItem={STARTITEM}&maxItems={MAXITEMS}&gcListOnly={GCLISTONLY}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [pocketQueryGuid] => {POCKETQUERYGUID}
    [startItem] => {STARTITEM}
    [maxItems] => {MAXITEMS}
    [gcListOnly] => {GCLISTONLY}
)
```

## GetPocketQueryList

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetPocketQueryList?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetPocketQueryZippedFile

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetPocketQueryZippedFile?accessToken={ACCESSTOKEN}&pocketQueryGuid={POCKETQUERYGUID}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [pocketQueryGuid] => {POCKETQUERYGUID}
)
```

## GetSiteStats

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetSiteStats?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetStatusMessages

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetStatusMessages?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetTrackableLogsByTBCode

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetTrackableLogsByTBCode?accessToken={ACCESSTOKEN}&tbCode={TBCODE}&startIndex={STARTINDEX}&maxPerPage={MAXPERPAGE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [tbCode] => {TBCODE}
    [startIndex] => {STARTINDEX}
    [maxPerPage] => {MAXPERPAGE}
)
```

## GetTrackableTravelList

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetTrackableTravelList?accessToken={ACCESSTOKEN}&tbCode={TBCODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [tbCode] => {TBCODE}
)
```

## GetTrackablesByTBCode

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetTrackablesByTBCode?accessToken={ACCESSTOKEN}&tbCode={TBCODE}&trackableLogCount={TRACKABLELOGCOUNT}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [tbCode] => {TBCODE}
    [trackableLogCount] => {TRACKABLELOGCOUNT}
)
```

## GetTrackablesByTrackingNumber

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetTrackablesByTrackingNumber?accessToken={ACCESSTOKEN}&trackingNumber={TRACKINGNUMBER}&trackableLogCount={TRACKABLELOGCOUNT}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [trackingNumber] => {TRACKINGNUMBER}
    [trackableLogCount] => {TRACKABLELOGCOUNT}
)
```

## GetTrackablesInCache

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetTrackablesInCache?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}&startIndex={STARTINDEX}&maxPerPage={MAXPERPAGE}&trackableLogCount={TRACKABLELOGCOUNT}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
    [startIndex] => {STARTINDEX}
    [maxPerPage] => {MAXPERPAGE}
    [trackableLogCount] => {TRACKABLELOGCOUNT}
)
```

## GetUserCredentials

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUserCredentials?consumerKey={CONSUMERKEY}&licenseGuid={LICENSEGUID}&username={USERNAME}&password={PASSWORD}

**Parameters**:

```php
Array
(
    [consumerKey] => {CONSUMERKEY}
    [licenseGuid] => {LICENSEGUID}
    [username] => {USERNAME}
    [password] => {PASSWORD}
)
```

## GetUserGallery

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUserGallery

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [Username] => String content
    [StartIndex] => 2147483647
    [MaxPerPage] => 2147483647
)
```

## GetUserWaypoints

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUserWaypoints?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
)
```

## GetUsersCacheCounts

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUsersCacheCounts

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [Usernames] => Array
        (
            [0] => String content
        )

)
```

## GetUsersCacheNotes

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUsersCacheNotes?accessToken={ACCESSTOKEN}&startIndex={STARTINDEX}&maxPerPage={MAXPERPAGE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [startIndex] => {STARTINDEX}
    [maxPerPage] => {MAXPERPAGE}
)
```

## GetUsersFavoritePoints

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUsersFavoritePoints?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetUsersGeocacheLogs

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUsersGeocacheLogs

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [Username] => String content
    [Range] => Array
        (
            [StartDate] => /Date(928174800000-0700)/
            [EndDate] => /Date(928174800000-0700)/
        )

    [LogTypes] => Array
        (
            [0] => 9223372036854775807
        )

    [ExcludeArchived] => 1
    [StartIndex] => 2147483647
    [MaxPerPage] => 2147483647
)
```

## GetUsersTrackables

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUsersTrackables

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [StartIndex] => 2147483647
    [MaxPerPage] => 2147483647
    [TrackableLogsCount] => 2147483647
    [CollectionOnly] => 1
)
```

## GetUsersWhoFavoritedCache

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetUsersWhoFavoritedCache?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
)
```

## GetWptLogTypes

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetWptLogTypes?accessToken={ACCESSTOKEN}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
)
```

## GetYourUserProfile

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/GetYourUserProfile

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [ProfileOptions] => Array
        (
            [ChallengesData] => 1
            [FavoritePointsData] => 1
            [GeocacheData] => 1
            [PublicProfileData] => 1
            [SouvenirData] => 1
            [TrackableData] => 1
            [EmailData] => 1
        )

    [DeviceInfo] => Array
        (
            [ApplicationCurrentMemoryUsage] => 2147483647
            [ApplicationPeakMemoryUsage] => 2147483647
            [ApplicationSoftwareVersion] => String content
            [DeviceManufacturer] => String content
            [DeviceName] => String content
            [DeviceOperatingSystem] => String content
            [DeviceTotalMemoryInMB] => 1.26743233E+15
            [DeviceUniqueId] => String content
            [MobileHardwareVersion] => String content
            [WebBrowserVersion] => String content
        )

)
```

## Ping

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/Ping



## RegisterWP7DeviceTile

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/RegisterWP7DeviceTile

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [DeviceFriendlyName] => String content
    [DeviceIdentifier] => String content
    [NotificationChannelUrl] => String content
)
```

## RemoveFavoritePointFromCache

**Method**: GET

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/RemoveFavoritePointFromCache?accessToken={ACCESSTOKEN}&cacheCode={CACHECODE}

**Parameters**:

```php
Array
(
    [accessToken] => {ACCESSTOKEN}
    [cacheCode] => {CACHECODE}
)
```

## SaveUserWaypoint

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/SaveUserWaypoint

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [CacheCode] => String content
    [Latitude] => 1.26743233E+15
    [Longitude] => 1.26743233E+15
    [Description] => String content
    [ID] => 9223372036854775807
    [IsCorrectedCoordinate] => 1
    [AssociatedAdditionalWaypoint] => 1627aea5-8e0a-4371-9022-9b504344e724
    [IsUserCompleted] => 1
)
```

## SearchForGeocaches

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/SearchForGeocaches

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [IsLite] => 1
    [MaxPerPage] => 2147483647
    [GeocacheLogCount] => 2147483647
    [TrackableLogCount] => 2147483647
    [PointRadius] => Array
        (
            [DistanceInMeters] => 9223372036854775807
            [Point] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

        )

    [NotFoundByUsers] => Array
        (
            [UserNames] => Array
                (
                    [0] => String content
                )

        )

    [Terrain] => Array
        (
            [MinTerrain] => 1.26743233E+15
            [MaxTerrain] => 1.26743233E+15
        )

    [GeocacheName] => Array
        (
            [GeocacheName] => String content
        )

    [Difficulty] => Array
        (
            [MinDifficulty] => 1.26743233E+15
            [MaxDifficulty] => 1.26743233E+15
        )

    [CacheCode] => Array
        (
            [CacheCodes] => Array
                (
                    [0] => String content
                )

        )

    [GeocacheType] => Array
        (
            [GeocacheTypeIds] => Array
                (
                    [0] => 9223372036854775807
                )

        )

    [GeocacheContainerSize] => Array
        (
            [GeocacheContainerSizeIds] => Array
                (
                    [0] => 9223372036854775807
                )

        )

    [GeocacheExclusions] => Array
        (
            [Archived] => 1
            [Available] => 1
            [HasCorrectedCoordinates] => 1
            [HasPersonalCacheNote] => 1
            [Premium] => 1
            [Published] => 1
        )

    [FavoritePoints] => Array
        (
            [MinFavoritePoints] => 2147483647
            [MaxFavoritePoints] => 2147483647
        )

    [HiddenByUsers] => Array
        (
            [UserNames] => Array
                (
                    [0] => String content
                )

        )

    [NotHiddenByUsers] => Array
        (
            [UserNames] => Array
                (
                    [0] => String content
                )

        )

    [Viewport] => Array
        (
            [BottomRight] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

            [TopLeft] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

        )

    [BookmarksExclude] => Array
        (
            [BookmarkListIDs] => Array
                (
                    [0] => 2147483647
                )

            [ExcludeIgnoreList] => 1
        )

    [TrackableCount] => Array
        (
            [MinTrackables] => 2147483647
            [MaxTrackables] => 2147483647
        )

    [FieldNoteFinds] => Array
        (
            [UserName] => String content
        )

    [CachePublishedDate] => Array
        (
            [Range] => Array
                (
                    [StartDate] => /Date(928174800000-0700)/
                    [EndDate] => /Date(928174800000-0700)/
                )

        )

    [States] => Array
        (
            [StateIds] => Array
                (
                    [0] => 2147483647
                )

        )

    [Countries] => Array
        (
            [CountryIds] => Array
                (
                    [0] => 2147483647
                )

        )

    [FoundByUser] => Array
        (
            [UserName] => String content
        )

    [Recommended] => Array
        (
            [Origin] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

        )

    [EventsDateRangeUtc] => Array
        (
            [Range] => Array
                (
                    [StartDate] => /Date(928174800000-0700)/
                    [EndDate] => /Date(928174800000-0700)/
                )

        )

    [SortBys] => Array
        (
            [0] => Array
                (
                    [AscendingOrder] => 1
                    [SortFilterId] => 0
                )

        )

    [IsSummaryOnly] => 1
    [SortPoint] => Array
        (
            [Latitude] => 1.26743233E+15
            [Longitude] => 1.26743233E+15
        )

)
```

## SearchForSouvenirsByPublicGuid

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/SearchForSouvenirsByPublicGuid

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [PublicGuid] => 1627aea5-8e0a-4371-9022-9b504344e724
    [ExistingSouvenirIDs] => Array
        (
            [0] => 2147483647
        )

)
```

## UpdateCacheNote

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/UpdateCacheNote

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [CacheCode] => String content
    [Note] => String content
)
```

## UploadImageToGeocacheLog

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/UploadImageToGeocacheLog

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [LogGuid] => 1627aea5-8e0a-4371-9022-9b504344e724
    [ImageData] => Array
        (
            [FileCaption] => String content
            [FileDescription] => String content
            [FileName] => String content
            [base64ImageData] => String content
        )

)
```

## UploadImageToTrackableLog

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/UploadImageToTrackableLog

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [LogGuid] => 1627aea5-8e0a-4371-9022-9b504344e724
    [ImageData] => Array
        (
            [FileCaption] => String content
            [FileDescription] => String content
            [FileName] => String content
            [base64ImageData] => String content
        )

)
```

## WindowsPhoneTileSearch

**Method**: POST

**URL**: https://api.groundspeak.com/LiveV6/geocaching.svc/WindowsPhoneTileSearch

**Parameters**:

```php
Array
(
    [AccessToken] => String content
    [DeviceId] => String content
    [TileUrl] => String content
    [IsMetric] => 1
    [PointRadius] => Array
        (
            [DistanceInMeters] => 9223372036854775807
            [Point] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

        )

    [NotFoundByUsers] => Array
        (
            [UserNames] => Array
                (
                    [0] => String content
                )

        )

    [Terrain] => Array
        (
            [MinTerrain] => 1.26743233E+15
            [MaxTerrain] => 1.26743233E+15
        )

    [GeocacheName] => Array
        (
            [GeocacheName] => String content
        )

    [Difficulty] => Array
        (
            [MinDifficulty] => 1.26743233E+15
            [MaxDifficulty] => 1.26743233E+15
        )

    [CacheCode] => Array
        (
            [CacheCodes] => Array
                (
                    [0] => String content
                )

        )

    [GeocacheType] => Array
        (
            [GeocacheTypeIds] => Array
                (
                    [0] => 9223372036854775807
                )

        )

    [GeocacheContainerSize] => Array
        (
            [GeocacheContainerSizeIds] => Array
                (
                    [0] => 9223372036854775807
                )

        )

    [GeocacheExclusions] => Array
        (
            [Archived] => 1
            [Available] => 1
            [HasCorrectedCoordinates] => 1
            [HasPersonalCacheNote] => 1
            [Premium] => 1
            [Published] => 1
        )

    [FavoritePoints] => Array
        (
            [MinFavoritePoints] => 2147483647
            [MaxFavoritePoints] => 2147483647
        )

    [HiddenByUsers] => Array
        (
            [UserNames] => Array
                (
                    [0] => String content
                )

        )

    [NotHiddenByUsers] => Array
        (
            [UserNames] => Array
                (
                    [0] => String content
                )

        )

    [Viewport] => Array
        (
            [BottomRight] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

            [TopLeft] => Array
                (
                    [Latitude] => 1.26743233E+15
                    [Longitude] => 1.26743233E+15
                )

        )

    [BookmarksExclude] => Array
        (
            [BookmarkListIDs] => Array
                (
                    [0] => 2147483647
                )

            [ExcludeIgnoreList] => 1
        )

    [TrackableCount] => Array
        (
            [MinTrackables] => 2147483647
            [MaxTrackables] => 2147483647
        )

    [CachePublishedDate] => Array
        (
            [Range] => Array
                (
                    [StartDate] => /Date(928174800000-0700)/
                    [EndDate] => /Date(928174800000-0700)/
                )

        )

)
```

