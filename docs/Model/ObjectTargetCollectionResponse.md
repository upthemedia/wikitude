# # ObjectTargetCollectionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Target Collection. | [optional]
**metadata** | **object** | Arbitrary JSON data that should be stored together with the Target Collection. | [optional]
**type** | **string** | Type of the Target Collection (\&quot;ImageTargetCollection\&quot; or \&quot;ObjectTargetCollection\&quot;). | [optional]
**sdk_version** | **string** | Version of the Wikitude SDK the WTO resource is generated for. | [optional]
**mod_dat** | **float** | Modification timestamp. | [optional]
**cre_dat** | **float** | Creation timestamp. | [optional]
**wto** | [**\OpenAPI\Client\Model\ObjectTargetCollectionResponseWto[]**](ObjectTargetCollectionResponseWto.md) | A list of generated WTO files. | [optional]
**id** | **string** | Unique identifier of the Target Collection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
