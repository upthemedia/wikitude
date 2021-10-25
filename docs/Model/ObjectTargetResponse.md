# # ObjectTargetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the Target. | [optional]
**name** | **string** | Name of the Target. | [optional]
**type** | **string** | Type of the Target (\&quot;Image\&quot; for Image Targets or \&quot;Object\&quot; for Object Targets). | [optional]
**file_size** | **float** | File size of the stored resource. | [optional]
**mod_dat** | **float** | Modification timestamp. | [optional]
**cre_dat** | **float** | Creation timestamp. | [optional]
**is_expandable** | **bool** | Indicates if an Object Target is extendable to improve tracking and recognition quality. Only Image-based Object Targets are extendable. | [optional]
**real_world_scale** | **float** | The physical (real world) size of the Target, in millimeters. Set to null to reset. | [optional]
**resource** | [**\OpenAPI\Client\Model\ObjectTargetResponseResource**](ObjectTargetResponseResource.md) |  | [optional]
**thumbnail_url** | **string** | URL to the Target resource thumbnail. | [optional]
**wto_file** | [**\OpenAPI\Client\Model\ObjectTargetResponseWtoFile**](ObjectTargetResponseWtoFile.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
