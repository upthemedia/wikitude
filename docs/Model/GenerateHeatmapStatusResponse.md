# # GenerateHeatmapStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input_params** | [**\OpenAPI\Client\Model\GenerateHeatmapResponseInputParams**](GenerateHeatmapResponseInputParams.md) |  | [optional]
**payload** | [**\OpenAPI\Client\Model\GenerateHeatmapStatusResponsePayload**](GenerateHeatmapStatusResponsePayload.md) |  | [optional]
**creation_date** | **float** | Timestamp of the job creation. | [optional]
**estimated_start** | **float** | Estimation of when the job will start processing. | [optional]
**estimated_end** | **float** | Estimation of when the job will approximately be finished. | [optional]
**estimated_latency** | **float** | Recommendation of when to first poll the corresponding status endpoint in milliseconds. | [optional]
**status** | **string** | The status of the asynchronous job. | [optional]
**id** | **string** | The asynchronous job id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
