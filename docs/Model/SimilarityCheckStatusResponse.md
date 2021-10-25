# # SimilarityCheckStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload** | [**\OpenAPI\Client\Model\SimilarityCheckStatusResponsePayload[]**](SimilarityCheckStatusResponsePayload.md) | Array containing job relevant results. | [optional]
**input_params** | [**\OpenAPI\Client\Model\SimilarityCheckStatusResponseInputParams**](SimilarityCheckStatusResponseInputParams.md) |  | [optional]
**status** | **string** | The status of the asynchronous job. | [optional]
**id** | **string** | The asynchronous job id. | [optional]
**estimated_latency** | **float** | Recommendation of when to first poll the corresponding status endpoint in milliseconds. | [optional]
**created** | **float** | Timestamp of the job creation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
