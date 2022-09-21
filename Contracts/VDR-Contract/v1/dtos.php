<?php
/* based on ORSCF VisitData Contract v1.9.1.11838 */

include 'models.php';

/*
* Contains arguments for calling 'GetApiVersion'.
* Method: returns the version of the ORSCF specification which is implemented by this API,
* (this can be used for backward compatibility within inhomogeneous infrastructures)
*/
public class GetApiVersionRequest {
  
}

/*
* Contains results from calling 'GetApiVersion'.
* Method: returns the version of the ORSCF specification which is implemented by this API,
* (this can be used for backward compatibility within inhomogeneous infrastructures)
*/
public class GetApiVersionResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetApiVersion' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'VdrEventSubscription',
* 'VisitConsume',
* 'VisitSubmission',
* 'VisitHL7Export',
* 'VisitHL7Import',
* 'DataRecordingSubmission'
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'VdrEventSubscription',
* 'VisitConsume',
* 'VisitSubmission',
* 'VisitHL7Export',
* 'VisitHL7Import',
* 'DataRecordingSubmission'
*/
public class GetCapabilitiesResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCapabilities' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:VisitDataConsume") and/or
* data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72")
* which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be:
* 0=auth needed /
* 1=authenticated /
* -1=auth expired /
* -2=auth invalid/disabled
*/
public class GetPermittedAuthScopesRequest {
  
}

/*
* Contains results from calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:VisitDataConsume") and/or
* data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72")
* which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be:
* 0=auth needed /
* 1=authenticated /
* -1=auth expired /
* -2=auth invalid/disabled
*/
public class GetPermittedAuthScopesResponse {
  
  // Out-Argument of 'GetPermittedAuthScopes' (int)
  #[Required]
  public int $authState;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetPermittedAuthScopes' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetOAuthTokenRequestUrl'.
* Method: OPTIONAL: If the authentication on the current service is mapped
* using tokens and should provide information about the source at this point,
* the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
*/
public class GetOAuthTokenRequestUrlRequest {
  
}

/*
* Contains results from calling 'GetOAuthTokenRequestUrl'.
* Method: OPTIONAL: If the authentication on the current service is mapped
* using tokens and should provide information about the source at this point,
* the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
*/
public class GetOAuthTokenRequestUrlResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetOAuthTokenRequestUrl' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'SubscribeForChangedVisits'.
* Method: Creates a subscription for changes which are affecting Visits.
* On success, a 'SubscriptionUid' will be returned and a call will be made to the given
* subscriberUrl + '/ConfirmAsSubscriber'. After the subscription
* has been confirmed, the requested events will be pushed to
* subscriberUrl + '/NoticeChangedVisits'
* (NOTICE: the receiving methods also are documented here, because this service itself can act as subscriber)
*/
public class SubscribeForChangedVisitsRequest {
  
  // Required Argument for 'SubscribeForChangedVisits' (string): the root-url of the subscriber which needs to provide at least the methods '/ConfirmAsSubscriber' and '/NoticeChangedVisits'
  #[Required]
  public string $subscriberUrl;
  
  // Optional Argument for 'SubscribeForChangedVisits' (VisitFilter): if provided, the subscription will only publish events for records matching to the given filter
  public VisitFilter $filter;
  
}

/*
* Contains results from calling 'SubscribeForChangedVisits'.
* Method: Creates a subscription for changes which are affecting Visits.
* On success, a 'SubscriptionUid' will be returned and a call will be made to the given
* subscriberUrl + '/ConfirmAsSubscriber'. After the subscription
* has been confirmed, the requested events will be pushed to
* subscriberUrl + '/NoticeChangedVisits'
* (NOTICE: the receiving methods also are documented here, because this service itself can act as subscriber)
*/
public class SubscribeForChangedVisitsResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'SubscribeForChangedVisits' (Guid)
  public string $return;
  
}

/*
* Contains arguments for calling 'NoticeChangedVisits'.
* Method: Receives notifications about changes which are affecting Visits.
* IMPORTANT: this method is dedicated to the usecase, when this service itself acts as a subscriber!
* So this can be called by an foreign service during the setup of a subscription, which was previously
* requested from here.
* The opposite case: any client subscribing to events from here,
* must provide its own http endpoint that has such a method!
*/
public class NoticeChangedVisitsRequest {
  
  // Required Argument for 'NoticeChangedVisits' (string): a UUID which identifies the current event message
  #[Required]
  public string $eventUid;
  
  // Required Argument for 'NoticeChangedVisits' (string): a SHA256 Hash of SubscriptionSecret + EventUid (in lower string representation, without '-' characters!) Sample: SHA256('ThEs3Cr3T'+'c997dfb1c445fea84afe995307713b59') = 'a320ef5b0f563e8dcb16d759961739977afc98b90628d9dc3be519fb20701490'
  #[Required]
  public string $eventSignature;
  
  // Required Argument for 'NoticeChangedVisits' (string): a UUID which identifies the subscription for which this event is published
  #[Required]
  public string $subscriptionUid;
  
  // Required Argument for 'NoticeChangedVisits' (string): root-URL of the VDR-Service which is publishing this event
  #[Required]
  public string $publisherUrl;
  
  // Required Argument for 'NoticeChangedVisits' (array)
  #[Required]
  public array $createdRecords;
  
  // Required Argument for 'NoticeChangedVisits' (array)
  #[Required]
  public array $modifiedRecords;
  
  // Required Argument for 'NoticeChangedVisits' (array)
  #[Required]
  public array $archivedRecords;
  
}

/*
* Contains results from calling 'NoticeChangedVisits'.
* Method: Receives notifications about changes which are affecting Visits.
* IMPORTANT: this method is dedicated to the usecase, when this service itself acts as a subscriber!
* So this can be called by an foreign service during the setup of a subscription, which was previously
* requested from here.
* The opposite case: any client subscribing to events from here,
* must provide its own http endpoint that has such a method!
*/
public class NoticeChangedVisitsResponse {
  
  // Out-Argument of 'NoticeChangedVisits' (bool): an array, which contains one element per changed visit
  #[Required]
  public bool $terminateSubscription;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ConfirmAsSubscriber'.
* Method: Confirms a Subscription.
* IMPORTANT: this method is dedicated to the usecase, when this service itself acts as a subscriber!
* So this can be called by an foreign service during the setup of a subscription, which was previously
* requested from here.
* The opposite case: any client subscribing to events from here,
* must provide its own http endpoint that has such a method!
*/
public class ConfirmAsSubscriberRequest {
  
  // Required Argument for 'ConfirmAsSubscriber' (string): root-URL of the VDR-Service on which the subscription was requested
  #[Required]
  public string $publisherUrl;
  
  // Required Argument for 'ConfirmAsSubscriber' (string): the Uid of the subscription which should be confirmed
  #[Required]
  public string $subscriptionUid;
  
}

/*
* Contains results from calling 'ConfirmAsSubscriber'.
* Method: Confirms a Subscription.
* IMPORTANT: this method is dedicated to the usecase, when this service itself acts as a subscriber!
* So this can be called by an foreign service during the setup of a subscription, which was previously
* requested from here.
* The opposite case: any client subscribing to events from here,
* must provide its own http endpoint that has such a method!
*/
public class ConfirmAsSubscriberResponse {
  
  // Out-Argument of 'ConfirmAsSubscriber' (string): A secret which is generated by the subscriber and used to provide additional security. It will be required for the 'TerminateSubscription' method and it is used to generate SHA256 hashes for signing the delivered event messages. The secret should: have a minimum length of 32 characters. A null or empty string has the semantics that the subscriber refuses to confirm and cancels the subscription setup.
  #[Required]
  public string $secret;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'TerminateSubscription'.
* Method: Terminates a subscription (on publisher side) and returns a boolean,
* which indicates success.
*/
public class TerminateSubscriptionRequest {
  
  // Required Argument for 'TerminateSubscription' (string): the Uid of the subscription which should be terminated
  #[Required]
  public string $subscriptionUid;
  
  // Required Argument for 'TerminateSubscription' (string): the (same) secret, which was given by the subscriber during the subscription setup
  #[Required]
  public string $secret;
  
}

/*
* Contains results from calling 'TerminateSubscription'.
* Method: Terminates a subscription (on publisher side) and returns a boolean,
* which indicates success.
*/
public class TerminateSubscriptionResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'TerminateSubscription' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'GetSubsriptionsBySubscriberUrl'.
* Method: Returns an array of subscriptionUid's.
* This method helps subscribers to evaluate whether current subscriptions are still active.
*/
public class GetSubsriptionsBySubscriberUrlRequest {
  
  // Required Argument for 'GetSubsriptionsBySubscriberUrl' (string)
  #[Required]
  public string $subscriberUrl;
  
  // Required Argument for 'GetSubsriptionsBySubscriberUrl' (string): the (same) secret, which was given by the subscriber during the subscription setup
  #[Required]
  public string $secret;
  
}

/*
* Contains results from calling 'GetSubsriptionsBySubscriberUrl'.
* Method: Returns an array of subscriptionUid's.
* This method helps subscribers to evaluate whether current subscriptions are still active.
*/
public class GetSubsriptionsBySubscriberUrlResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetSubsriptionsBySubscriberUrl' (Guid[])
  public array $return;
  
}

/*
* Contains arguments for calling 'EnrollDataForVisitExplicit'.
* Method: Enrolls recorded data to be stored as 'DataRecording'-Record related to a explicitly addressed Visit inside of this repository.
* This goes ahead with an validation process for each enrollment, therefore a dataEnrollmentUid will be returned
* which can be used to query the state of this process via 'GetValidationState'.
*/
public class EnrollDataForVisitExplicitRequest {
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): the ORSCF-Visit-UID to address the parent visit for which the given data should be submitted
  #[Required]
  public string $targetvisitUid;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  #[Required]
  public string $taskExecutionTitle;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): the time, when the data was recorded
  #[Required]
  public string $executionDateTimeUtc;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): 'FhirQuestionaire' / 'XML' / 'CSV' / 'Custom'
  #[Required]
  public string $dataSchemaKind;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): the schema-url of the data which were stored inside of the 'RecordedData' field
  #[Required]
  public string $dataSchemaUrl;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): version of schema, which is addressed by the 'DataSchemaUrl'
  #[Required]
  public string $dataSchemaVersion;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): Language of free-text information inside of the data content
  #[Required]
  public string $dataLanguage;
  
  // Required Argument for 'EnrollDataForVisitExplicit' (string): RAW data, in the schema as defined at the 'DataSchemaUrl'
  #[Required]
  public string $recordedData;
  
}

/*
* Contains results from calling 'EnrollDataForVisitExplicit'.
* Method: Enrolls recorded data to be stored as 'DataRecording'-Record related to a explicitly addressed Visit inside of this repository.
* This goes ahead with an validation process for each enrollment, therefore a dataEnrollmentUid will be returned
* which can be used to query the state of this process via 'GetValidationState'.
*/
public class EnrollDataForVisitExplicitResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'EnrollDataForVisitExplicit' (Guid)
  public string $return;
  
}

/*
* Contains arguments for calling 'EnrollDataForVisitImplicit'.
* Method: Enrolls recorded data to be stored as 'DataRecording'-Record related to a visit inside of this repository
* (which is implicitely resolved using the given 'visitExecutionTitle' and 'subjectIdentifier') .
* This goes ahead with an validation process for each enrollment, therefore a dataEnrollmentUid will be returned
* which can be used to query the state of this process via 'GetValidationState'.
*/
public class EnrollDataForVisitImplicitRequest {
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): the ORSCF-Study-UID which is used to lookup for the target visit for which the given data should be submitted
  #[Required]
  public string $studyUid;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): the study related identity of the patient (usually a pseudonym) which is used to lookup for the target visit for which the given data should be submitted
  #[Required]
  public string $subjectIdentifier;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): unique title of the visit execution as defined in the 'StudyWorkflowDefinition' which is used to lookup for the target visit for which the given data should be submitted
  #[Required]
  public string $visitExecutionTitle;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  #[Required]
  public string $taskExecutionTitle;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): the time, when the data was recorded
  #[Required]
  public string $executionDateTimeUtc;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): 'FhirQuestionaire' / 'XML' / 'CSV' / 'Custom'
  #[Required]
  public string $dataSchemaKind;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): the schema-url of the data which were stored inside of the 'RecordedData' field
  #[Required]
  public string $dataSchemaUrl;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): version of schema, which is addressed by the 'DataSchemaUrl'
  #[Required]
  public string $dataSchemaVersion;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): Language of free-text information inside of the data content
  #[Required]
  public string $dataLanguage;
  
  // Required Argument for 'EnrollDataForVisitImplicit' (string): RAW data, in the schema as defined at the 'DataSchemaUrl'
  #[Required]
  public string $recordedData;
  
}

/*
* Contains results from calling 'EnrollDataForVisitImplicit'.
* Method: Enrolls recorded data to be stored as 'DataRecording'-Record related to a visit inside of this repository
* (which is implicitely resolved using the given 'visitExecutionTitle' and 'subjectIdentifier') .
* This goes ahead with an validation process for each enrollment, therefore a dataEnrollmentUid will be returned
* which can be used to query the state of this process via 'GetValidationState'.
*/
public class EnrollDataForVisitImplicitResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'EnrollDataForVisitImplicit' (Guid)
  public string $return;
  
}

/*
* Contains arguments for calling 'GetValidationState'.
* Method: Providing the current validation state for a given data enrollment process
*/
public class GetValidationStateRequest {
  
  // Required Argument for 'GetValidationState' (string)
  #[Required]
  public string $dataEnrollmentUid;
  
}

/*
* Contains results from calling 'GetValidationState'.
* Method: Providing the current validation state for a given data enrollment process
*/
public class GetValidationStateResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetValidationState' (DataEnrollmentValidationState): Declares, which portion of the corresponding 'value' should be compared. DEFAULT (if this is undefined or null) is 'Date'(3).
  public DataEnrollmentValidationState $return;
  
}

/*
* Contains arguments for calling 'ImportDataRecordings'.
*/
public class ImportDataRecordingsRequest {
  
  // Required Argument for 'ImportDataRecordings' (array)
  #[Required]
  public array $dataRecordings;
  
}

/*
* Contains results from calling 'ImportDataRecordings'.
*/
public class ImportDataRecordingsResponse {
  
  // Out-Argument of 'ImportDataRecordings' (array)
  #[Required]
  public array $createdDataRecordingUids;
  
  // Out-Argument of 'ImportDataRecordings' (array)
  #[Required]
  public array $updatedDataRecordingUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'SearchVisits'.
* Method: Searches Visits by a given 'filter' (if provided),
* sorts the results by the given 'sortingField' (if provided) and
* returns an array of VisitUids for the matching records.
*/
public class SearchVisitsRequest {
  
  // Optional Argument for 'SearchVisits' (string): A fieldname, which should be used to sort the result (can also be a 'CustomField'). If not provided, the result will be sorted by the creation date of the records
  public string $sortingField;
  
  // Optional Argument for 'SearchVisits' (?bool): toggles the sorting direction
  public ?bool $sortDescending = null;
  
  // Optional Argument for 'SearchVisits' (VisitFilter): values by field name (can also be a 'CustomField') which will used as AND-linked filter
  public VisitFilter $filter;
  
  // Optional Argument for 'SearchVisits' (?bool): includes archived records in the result
  public ?bool $includeArchivedRecords = null;
  
  // Optional Argument for 'SearchVisits' (?int): a value greather than zero will represent a maximum count of results, that sould be returned
  public ?int $limitResults = null;
  
}

/*
* Contains results from calling 'SearchVisits'.
* Method: Searches Visits by a given 'filter' (if provided),
* sorts the results by the given 'sortingField' (if provided) and
* returns an array of VisitUids for the matching records.
*/
public class SearchVisitsResponse {
  
  // Out-Argument of 'SearchVisits' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'SearchChangedVisits'.
* Method: Searches Visits which have been modified after(or at) the given 'minTimestampUtc',
* matching to the given 'filter' (if provided).
* The result is sorted descenting by the timestamp of the modification (latest first) and will
* include archived records.
*/
public class SearchChangedVisitsRequest {
  
  // Required Argument for 'SearchChangedVisits' (int): start of the timespan to search (as UNIX-Timestamp)
  #[Required]
  public int $minTimestampUtc;
  
  // Optional Argument for 'SearchChangedVisits' (VisitFilter): values by field name (can also be a 'CustomField') which will used as AND-linked filter
  public VisitFilter $filter;
  
}

/*
* Contains results from calling 'SearchChangedVisits'.
* Method: Searches Visits which have been modified after(or at) the given 'minTimestampUtc',
* matching to the given 'filter' (if provided).
* The result is sorted descenting by the timestamp of the modification (latest first) and will
* include archived records.
*/
public class SearchChangedVisitsResponse {
  
  // Out-Argument of 'SearchChangedVisits' (int): the exact timestamp of the search (as UNIX-Timestamp)
  #[Required]
  public int $latestTimestampUtc;
  
  // Out-Argument of 'SearchChangedVisits' (array)
  #[Required]
  public array $createdRecords;
  
  // Out-Argument of 'SearchChangedVisits' (array)
  #[Required]
  public array $modifiedRecords;
  
  // Out-Argument of 'SearchChangedVisits' (array)
  #[Required]
  public array $archivedRecords;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'GetCustomFieldDescriptorsForVisit'.
*/
public class GetCustomFieldDescriptorsForVisitRequest {
  
  // Optional Argument for 'GetCustomFieldDescriptorsForVisit' (string): Preferred language for the 'DisplayLabel' and 'InputDescription' fields of the returned descriptors. The default is 'EN'.
  public string $languagePref;
  
}

/*
* Contains results from calling 'GetCustomFieldDescriptorsForVisit'.
*/
public class GetCustomFieldDescriptorsForVisitResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCustomFieldDescriptorsForVisit' (CustomFieldDescriptor[])
  public array $return;
  
}

/*
* Contains arguments for calling 'CheckVisitExisitence'.
* Method: Checks the existence of 'Visits' for a given list of visitUids
*/
public class CheckVisitExisitenceRequest {
  
  // Required Argument for 'CheckVisitExisitence' (array)
  #[Required]
  public array $visitUids;
  
}

/*
* Contains results from calling 'CheckVisitExisitence'.
* Method: Checks the existence of 'Visits' for a given list of visitUids
*/
public class CheckVisitExisitenceResponse {
  
  // Out-Argument of 'CheckVisitExisitence' (array)
  #[Required]
  public array $unavailableVisitUids;
  
  // Out-Argument of 'CheckVisitExisitence' (array)
  #[Required]
  public array $availableVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'GetVisitFields'.
* Method: loads the requested visits and returns lightweight json objects (without childs),
* which are optimized to be displayed as table (the most common UI use case).
* This models containig a combination of:
* essential fieds from the record,
* calculated fields (numbers of child records),
* custom fields (choosen by the service)
*/
public class GetVisitFieldsRequest {
  
  // Required Argument for 'GetVisitFields' (array)
  #[Required]
  public array $visitUids;
  
}

/*
* Contains results from calling 'GetVisitFields'.
* Method: loads the requested visits and returns lightweight json objects (without childs),
* which are optimized to be displayed as table (the most common UI use case).
* This models containig a combination of:
* essential fieds from the record,
* calculated fields (numbers of child records),
* custom fields (choosen by the service)
*/
public class GetVisitFieldsResponse {
  
  // Out-Argument of 'GetVisitFields' (array)
  #[Required]
  public array $unavailableVisitUids;
  
  // Out-Argument of 'GetVisitFields' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ExportVisits'.
* Method: exports full 'VisitStructures'
*/
public class ExportVisitsRequest {
  
  // Required Argument for 'ExportVisits' (array)
  #[Required]
  public array $visitUids;
  
}

/*
* Contains results from calling 'ExportVisits'.
* Method: exports full 'VisitStructures'
*/
public class ExportVisitsResponse {
  
  // Out-Argument of 'ExportVisits' (array)
  #[Required]
  public array $unavailableVisitUids;
  
  // Out-Argument of 'ExportVisits' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ExportVisitFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ExportVisitFhirRessourcesRequest {
  
  // Required Argument for 'ExportVisitFhirRessources' (string)
  #[Required]
  public string $visitUid;
  
}

/*
* Contains results from calling 'ExportVisitFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ExportVisitFhirRessourcesResponse {
  
  // Out-Argument of 'ExportVisitFhirRessources' (array)
  #[Required]
  public array $visitFhirRessources;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'ExportVisitFhirRessources' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'ImportVisitFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ImportVisitFhirRessourcesRequest {
  
  // Required Argument for 'ImportVisitFhirRessources' (array): A structure containing HL7/FHIR-Ressources (JSON only) and the essential fields which are required to qualify a ORSCF record.
  #[Required]
  public array $visitFhirRessources;
  
}

/*
* Contains results from calling 'ImportVisitFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ImportVisitFhirRessourcesResponse {
  
  // Out-Argument of 'ImportVisitFhirRessources' (array)
  #[Required]
  public array $createdVisitUids;
  
  // Out-Argument of 'ImportVisitFhirRessources' (array)
  #[Required]
  public array $updatedVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ArchiveVisits'.
*/
public class ArchiveVisitsRequest {
  
  // Required Argument for 'ArchiveVisits' (array)
  #[Required]
  public array $visitUids;
  
}

/*
* Contains results from calling 'ArchiveVisits'.
*/
public class ArchiveVisitsResponse {
  
  // Out-Argument of 'ArchiveVisits' (array): also including the Uids of already archived records
  #[Required]
  public array $archivedVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'UnarchiveVisits'.
*/
public class UnarchiveVisitsRequest {
  
  // Required Argument for 'UnarchiveVisits' (array)
  #[Required]
  public array $visitUids;
  
}

/*
* Contains results from calling 'UnarchiveVisits'.
*/
public class UnarchiveVisitsResponse {
  
  // Out-Argument of 'UnarchiveVisits' (array)
  #[Required]
  public array $unarchivedVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ApplyVisitMutations'.
*/
public class ApplyVisitMutationsRequest {
  
  // Required Argument for 'ApplyVisitMutations' (object)
  #[Required]
  public object $mutationsByVisitUid;
  
}

/*
* Contains results from calling 'ApplyVisitMutations'.
*/
public class ApplyVisitMutationsResponse {
  
  // Out-Argument of 'ApplyVisitMutations' (array)
  #[Required]
  public array $updatedVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ApplyVisitBatchMutation'.
*/
public class ApplyVisitBatchMutationRequest {
  
  // Required Argument for 'ApplyVisitBatchMutation' (array)
  #[Required]
  public array $visitUids;
  
  // Required Argument for 'ApplyVisitBatchMutation' (BatchableVisitMutation)
  #[Required]
  public BatchableVisitMutation $mutation;
  
}

/*
* Contains results from calling 'ApplyVisitBatchMutation'.
*/
public class ApplyVisitBatchMutationResponse {
  
  // Out-Argument of 'ApplyVisitBatchMutation' (array)
  #[Required]
  public array $updatedVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ImportVisits'.
*/
public class ImportVisitsRequest {
  
  // Required Argument for 'ImportVisits' (array)
  #[Required]
  public array $visits;
  
}

/*
* Contains results from calling 'ImportVisits'.
*/
public class ImportVisitsResponse {
  
  // Out-Argument of 'ImportVisits' (array)
  #[Required]
  public array $createdVisitUids;
  
  // Out-Argument of 'ImportVisits' (array)
  #[Required]
  public array $updatedVisitUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}
