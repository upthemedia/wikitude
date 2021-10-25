# # ImageTargetCollectionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the Target Collection. | [optional]
**name** | **string** | Name of the Target Collection. | [optional]
**type** | **string** | Type of the Target Collection (\&quot;ImageTargetCollection\&quot; or \&quot;ObjectTargetCollection\&quot;). | [optional]
**wtc** | [**\OpenAPI\Client\Model\ImageTargetCollectionResponseWtc[]**](ImageTargetCollectionResponseWtc.md) | A list of generated WTC files. | [optional]
**mod_dat** | **float** | Modification timestamp. | [optional]
**cre_dat** | **float** | Creation timestamp. | [optional]
**metadata** | **object** | Arbitrary JSON data that should be stored together with the Target Collection. | [optional]
**cloud_archive** | [**\OpenAPI\Client\Model\ImageTargetCollectionResponseCloudArchive**](ImageTargetCollectionResponseCloudArchive.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
