# wikitude_studio_api_client

The Wikitude Studio API is a RESTful API which is used to
* organize and manipulate projects and its targets
* create wtc/wto files which can be used to create trackers in the Wikitude SDK with the JavaScript API
* generate/publish a cloud archive to the cloud recognition service (image targets only)

Download API clients:
* [`OpenAPI 3.0`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-openapi.zip)
* [`JavaScript`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-javascript.zip)
* [`Python`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-python.zip)
* [`PHP`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-php.zip)
* [`TypeScript (NodeJS)`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-typescript-node.zip)
* [`Java`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-java.zip)
* [`Ruby`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-ruby.zip)
* [`C# .NET Core`](https://www.wikitude.com/external/doc/documentation/studio-api/clients/wikitude_studio_api_client-csharp-netcore.zip)

This technical reference formally explains various API endpoints.
Visit the [`Studio API documentation`](https://www.wikitude.com/external/doc/documentation/studio/) for a more general description.



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/wikitude_studio_api_client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_version = 3; // string | The version of the API to be used. Must be set to 3.
$x_token = 'x_token_example'; // string | Your Manager Token.

try {
    $result = $apiInstance->getAccount($x_version, $x_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-eu.wikitude.com/cloudrecognition*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Get account information
*HeatmapApi* | [**generateHeatmap**](docs/Api/HeatmapApi.md#generateheatmap) | **POST** /heatmap | Generate Heatmap
*HeatmapApi* | [**getHeatmapStatus**](docs/Api/HeatmapApi.md#getheatmapstatus) | **GET** /heatmap/{generationId} | Status - Generate Heatmap
*ImageTargetApi* | [**createImageTargets**](docs/Api/ImageTargetApi.md#createimagetargets) | **POST** /targetCollection/{tcId}/targets | Create Image Targets
*ImageTargetApi* | [**deleteImageTarget**](docs/Api/ImageTargetApi.md#deleteimagetarget) | **DELETE** /targetCollection/{tcId}/target/{targetId} | Delete Image Target
*ImageTargetApi* | [**getImageTarget**](docs/Api/ImageTargetApi.md#getimagetarget) | **GET** /targetCollection/{tcId}/target/{targetId} | Get Image Target
*ImageTargetApi* | [**getImageTargetStatus**](docs/Api/ImageTargetApi.md#getimagetargetstatus) | **GET** /targetCollection/{tcId}/generation/targets/{generationId} | Status - Image Targets Creation
*ImageTargetApi* | [**getImageTargets**](docs/Api/ImageTargetApi.md#getimagetargets) | **GET** /targetCollection/{tcId}/target | Get Image Targets
*ImageTargetApi* | [**updateImageTarget**](docs/Api/ImageTargetApi.md#updateimagetarget) | **POST** /targetCollection/{tcId}/target/{targetId} | Update Image Target
*ImageTargetCollectionApi* | [**createImageTargetCollection**](docs/Api/ImageTargetCollectionApi.md#createimagetargetcollection) | **POST** /targetCollection | Create Image Target Collection
*ImageTargetCollectionApi* | [**deleteImageTargetCollection**](docs/Api/ImageTargetCollectionApi.md#deleteimagetargetcollection) | **DELETE** /targetCollection/{tcId} | Delete Image Target Collection
*ImageTargetCollectionApi* | [**generateCloudArchive**](docs/Api/ImageTargetCollectionApi.md#generatecloudarchive) | **POST** /targetCollection/{tcId}/generation/cloudarchive | Generate Cloud Archive
*ImageTargetCollectionApi* | [**generateWTC**](docs/Api/ImageTargetCollectionApi.md#generatewtc) | **POST** /targetCollection/{tcId}/generation/wtc | Generate WTC
*ImageTargetCollectionApi* | [**getCloudArchiveStatus**](docs/Api/ImageTargetCollectionApi.md#getcloudarchivestatus) | **GET** /targetCollection/{tcId}/generation/cloudarchive/{generationId} | Status - Generate Cloud Archive
*ImageTargetCollectionApi* | [**getImageTargetCollection**](docs/Api/ImageTargetCollectionApi.md#getimagetargetcollection) | **GET** /targetCollection/{tcId} | Get Image Target Collection
*ImageTargetCollectionApi* | [**getImageTargetCollections**](docs/Api/ImageTargetCollectionApi.md#getimagetargetcollections) | **GET** /targetCollection | Get all Image Target Collections
*ImageTargetCollectionApi* | [**getSimilarityCheckStatus**](docs/Api/ImageTargetCollectionApi.md#getsimilaritycheckstatus) | **GET** /targetCollection/{tcId}/similarity/{generationId} | Status - Similarity Check
*ImageTargetCollectionApi* | [**getWTCStatus**](docs/Api/ImageTargetCollectionApi.md#getwtcstatus) | **GET** /targetCollection/{tcId}/generation/wtc/{generationId} | Status - Generate WTC
*ImageTargetCollectionApi* | [**similarityCheck**](docs/Api/ImageTargetCollectionApi.md#similaritycheck) | **POST** /targetCollection/{tcId}/similarity | Similarity Check
*ImageTargetCollectionApi* | [**updateImageTargetCollection**](docs/Api/ImageTargetCollectionApi.md#updateimagetargetcollection) | **POST** /targetCollection/{tcId} | Update Image Target Collection
*ObjectTargetApi* | [**createObjectTargetFromImages**](docs/Api/ObjectTargetApi.md#createobjecttargetfromimages) | **POST** /objectTargetCollection/{tcId}/target/images | Create Object Target from Images
*ObjectTargetApi* | [**createObjectTargetFromWTO**](docs/Api/ObjectTargetApi.md#createobjecttargetfromwto) | **POST** /objectTargetCollection/{tcId}/target/wto | Create Object Target from WTO
*ObjectTargetApi* | [**deleteObjectTarget**](docs/Api/ObjectTargetApi.md#deleteobjecttarget) | **DELETE** /objectTargetCollection/{tcId}/target/{targetId} | Delete Object Target
*ObjectTargetApi* | [**extendObjectTarget**](docs/Api/ObjectTargetApi.md#extendobjecttarget) | **PUT** /objectTargetCollection/{tcId}/target/{targetId} | Extend Object Target
*ObjectTargetApi* | [**getObjectTarget**](docs/Api/ObjectTargetApi.md#getobjecttarget) | **GET** /objectTargetCollection/{tcId}/target/{targetId} | Get Object Target
*ObjectTargetApi* | [**getObjectTargetStatus**](docs/Api/ObjectTargetApi.md#getobjecttargetstatus) | **GET** /objectTargetCollection/{tcId}/generation/targets/{generationId} | Status - Object Target Generation Information
*ObjectTargetApi* | [**getObjectTargets**](docs/Api/ObjectTargetApi.md#getobjecttargets) | **GET** /objectTargetCollection/{tcId}/target | Get Object Targets
*ObjectTargetApi* | [**renameObjectTarget**](docs/Api/ObjectTargetApi.md#renameobjecttarget) | **PUT** /objectTargetCollection/{tcId}/target/{targetId}/name | Rename Object Target
*ObjectTargetCollectionApi* | [**createObjectTargetCollection**](docs/Api/ObjectTargetCollectionApi.md#createobjecttargetcollection) | **POST** /objectTargetCollection | Create Object Target Collection
*ObjectTargetCollectionApi* | [**deleteObjectTargetCollection**](docs/Api/ObjectTargetCollectionApi.md#deleteobjecttargetcollection) | **DELETE** /objectTargetCollection/{tcId} | Delete Object Target Collection
*ObjectTargetCollectionApi* | [**generateWTO**](docs/Api/ObjectTargetCollectionApi.md#generatewto) | **POST** /objectTargetCollection/{tcId}/generation/wto | Generate WTO
*ObjectTargetCollectionApi* | [**getObjectTargetCollection**](docs/Api/ObjectTargetCollectionApi.md#getobjecttargetcollection) | **GET** /objectTargetCollection/{tcId} | Get Object Target Collection
*ObjectTargetCollectionApi* | [**getObjectTargetCollectionStatus**](docs/Api/ObjectTargetCollectionApi.md#getobjecttargetcollectionstatus) | **GET** /objectTargetCollection/{tcId}/jobs | Status - Get Object Target Collection jobs
*ObjectTargetCollectionApi* | [**getObjectTargetCollections**](docs/Api/ObjectTargetCollectionApi.md#getobjecttargetcollections) | **GET** /objectTargetCollection | Get all Object Target Collections
*ObjectTargetCollectionApi* | [**getWTOStatus**](docs/Api/ObjectTargetCollectionApi.md#getwtostatus) | **GET** /objectTargetCollection/{tcId}/generation/wto/{generationId} | Status - Generate WTO
*ObjectTargetCollectionApi* | [**updateObjectTargetCollection**](docs/Api/ObjectTargetCollectionApi.md#updateobjecttargetcollection) | **PUT** /objectTargetCollection/{tcId} | Update Object Target Collection
*ProjectApi* | [**getProjects**](docs/Api/ProjectApi.md#getprojects) | **GET** /projects | Get all projects

## Models

- [CloudArchiveGenerationResponse](docs/Model/CloudArchiveGenerationResponse.md)
- [CloudArchiveGenerationResponseInputParams](docs/Model/CloudArchiveGenerationResponseInputParams.md)
- [CreateImageTargetCollectionBody](docs/Model/CreateImageTargetCollectionBody.md)
- [CreateImageTargetCollectionBodyCloudArchive](docs/Model/CreateImageTargetCollectionBodyCloudArchive.md)
- [CreateImageTargetsBody](docs/Model/CreateImageTargetsBody.md)
- [CreateImageTargetsResponse](docs/Model/CreateImageTargetsResponse.md)
- [CreateImageTargetsResponseInputParams](docs/Model/CreateImageTargetsResponseInputParams.md)
- [CreateImageTargetsResponseInputParamsTargets](docs/Model/CreateImageTargetsResponseInputParamsTargets.md)
- [CreateObjectTargetCollectionBody](docs/Model/CreateObjectTargetCollectionBody.md)
- [CreateObjectTargetImagesBody](docs/Model/CreateObjectTargetImagesBody.md)
- [CreateObjectTargetImagesBodyResource](docs/Model/CreateObjectTargetImagesBodyResource.md)
- [CreateObjectTargetWTOBody](docs/Model/CreateObjectTargetWTOBody.md)
- [CreateObjectTargetWTOBodyResource](docs/Model/CreateObjectTargetWTOBodyResource.md)
- [ExtendObjectTargetBody](docs/Model/ExtendObjectTargetBody.md)
- [GenerateHeatmapBody](docs/Model/GenerateHeatmapBody.md)
- [GenerateHeatmapResponse](docs/Model/GenerateHeatmapResponse.md)
- [GenerateHeatmapResponseInputParams](docs/Model/GenerateHeatmapResponseInputParams.md)
- [GenerateHeatmapStatusResponse](docs/Model/GenerateHeatmapStatusResponse.md)
- [GenerateHeatmapStatusResponsePayload](docs/Model/GenerateHeatmapStatusResponsePayload.md)
- [GenerateWTCBody](docs/Model/GenerateWTCBody.md)
- [GenerateWTCStatusResponse](docs/Model/GenerateWTCStatusResponse.md)
- [GenerateWTOBody](docs/Model/GenerateWTOBody.md)
- [GetAccountInfoResponse](docs/Model/GetAccountInfoResponse.md)
- [GetAccountInfoResponseStorage](docs/Model/GetAccountInfoResponseStorage.md)
- [ImageTargetCollectionResponse](docs/Model/ImageTargetCollectionResponse.md)
- [ImageTargetCollectionResponseCloudArchive](docs/Model/ImageTargetCollectionResponseCloudArchive.md)
- [ImageTargetCollectionResponseWtc](docs/Model/ImageTargetCollectionResponseWtc.md)
- [ImageTargetResponse](docs/Model/ImageTargetResponse.md)
- [ObjectTargetCollectionJobResponse](docs/Model/ObjectTargetCollectionJobResponse.md)
- [ObjectTargetCollectionResponse](docs/Model/ObjectTargetCollectionResponse.md)
- [ObjectTargetCollectionResponseWto](docs/Model/ObjectTargetCollectionResponseWto.md)
- [ObjectTargetJobResponse](docs/Model/ObjectTargetJobResponse.md)
- [ObjectTargetResponse](docs/Model/ObjectTargetResponse.md)
- [ObjectTargetResponseResource](docs/Model/ObjectTargetResponseResource.md)
- [ObjectTargetResponseWtoFile](docs/Model/ObjectTargetResponseWtoFile.md)
- [RenameObjectTargetBody](docs/Model/RenameObjectTargetBody.md)
- [SimilarityCheckBody](docs/Model/SimilarityCheckBody.md)
- [SimilarityCheckBodyImages](docs/Model/SimilarityCheckBodyImages.md)
- [SimilarityCheckResponse](docs/Model/SimilarityCheckResponse.md)
- [SimilarityCheckResponseInputParams](docs/Model/SimilarityCheckResponseInputParams.md)
- [SimilarityCheckResponseInputParamsImages](docs/Model/SimilarityCheckResponseInputParamsImages.md)
- [SimilarityCheckStatusResponse](docs/Model/SimilarityCheckStatusResponse.md)
- [SimilarityCheckStatusResponseCandidates](docs/Model/SimilarityCheckStatusResponseCandidates.md)
- [SimilarityCheckStatusResponseInputParams](docs/Model/SimilarityCheckStatusResponseInputParams.md)
- [SimilarityCheckStatusResponsePayload](docs/Model/SimilarityCheckStatusResponsePayload.md)
- [UpdateImageTargetBody](docs/Model/UpdateImageTargetBody.md)
- [UpdateImageTargetCollectionBody](docs/Model/UpdateImageTargetCollectionBody.md)
- [UpdateObjectTargetCollectionBody](docs/Model/UpdateObjectTargetCollectionBody.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.0`
    - Package version: `3.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
# wikitude
