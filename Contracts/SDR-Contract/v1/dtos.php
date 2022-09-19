<?php
/* based on ORSCF SubjectData Contract v1.9.0.0 */

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
* 'SdrEventSubscription',
* 'SubjectConsume',
* 'SubjectSubmission',
* 'SubjectHL7Export'
* 'SubjectHL7Import'
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'SdrEventSubscription',
* 'SubjectConsume',
* 'SubjectSubmission',
* 'SubjectHL7Export'
* 'SubjectHL7Import'
*/
public class GetCapabilitiesResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCapabilities' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:SubjectOverview") and/or
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
* Method: returns a list of available capabilities ("API:SubjectOverview") and/or
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
* Contains arguments for calling 'SubscribeForChangedSubjects'.
* Method: Creates a subscription for changes which are affecting Subjects.
* On success, a 'SubscriptionUid' will be returned and a call will be made to the given
* subscriberUrl + '/ConfirmAsSubscriber'. After the subscription
* has been confirmed, the requested events will be pushed to
* subscriberUrl + '/NoticeChangedSubjects'
* (NOTICE: the receiving methods also are documented here, because this service itself can act as subscriber)
*/
public class SubscribeForChangedSubjectsRequest {
  
  // Required Argument for 'SubscribeForChangedSubjects' (string): the root-url of the subscriber which needs to provide at least the methods '/ConfirmAsSubscriber' and '/NoticeChangedSubjects'
  #[Required]
  public string $subscriberUrl;
  
  // Optional Argument for 'SubscribeForChangedSubjects' (SubjectFilter): if provided, the subscription will only publish events for records matching to the given filter
  public SubjectFilter $filter;
  
}

/*
* Contains results from calling 'SubscribeForChangedSubjects'.
* Method: Creates a subscription for changes which are affecting Subjects.
* On success, a 'SubscriptionUid' will be returned and a call will be made to the given
* subscriberUrl + '/ConfirmAsSubscriber'. After the subscription
* has been confirmed, the requested events will be pushed to
* subscriberUrl + '/NoticeChangedSubjects'
* (NOTICE: the receiving methods also are documented here, because this service itself can act as subscriber)
*/
public class SubscribeForChangedSubjectsResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'SubscribeForChangedSubjects' (Guid)
  public string $return;
  
}

/*
* Contains arguments for calling 'NoticeChangedSubjects'.
* Method: Receives notifications about changes which are affecting Subjects.
* IMPORTANT: this method is dedicated to the usecase, when this service itself acts as a subscriber!
* So this can be called by an foreign service during the setup of a subscription, which was previously
* requested from here.
* The opposite case: any client subscribing to events from here,
* must provide its own http endpoint that has such a method!
*/
public class NoticeChangedSubjectsRequest {
  
  // Required Argument for 'NoticeChangedSubjects' (string): a UUID which identifies the current event message
  #[Required]
  public string $eventUid;
  
  // Required Argument for 'NoticeChangedSubjects' (string): a SHA256 Hash of SubscriptionSecret + EventUid (in lower string representation, without '-' characters!) Sample: SHA256('ThEs3Cr3T'+'c997dfb1c445fea84afe995307713b59') = 'a320ef5b0f563e8dcb16d759961739977afc98b90628d9dc3be519fb20701490'
  #[Required]
  public string $eventSignature;
  
  // Required Argument for 'NoticeChangedSubjects' (string): a UUID which identifies the subscription for which this event is published
  #[Required]
  public string $subscriptionUid;
  
  // Required Argument for 'NoticeChangedSubjects' (string): root-URL of the VDR-Service which is publishing this event
  #[Required]
  public string $publisherUrl;
  
  // Required Argument for 'NoticeChangedSubjects' (array): an array, which contains one element per changed record
  #[Required]
  public array $createdRecords;
  
  // Required Argument for 'NoticeChangedSubjects' (array): an array, which contains one element per modified record
  #[Required]
  public array $modifiedRecords;
  
  // Required Argument for 'NoticeChangedSubjects' (array): an array, which contains one element per archived record
  #[Required]
  public array $archivedRecords;
  
}

/*
* Contains results from calling 'NoticeChangedSubjects'.
* Method: Receives notifications about changes which are affecting Subjects.
* IMPORTANT: this method is dedicated to the usecase, when this service itself acts as a subscriber!
* So this can be called by an foreign service during the setup of a subscription, which was previously
* requested from here.
* The opposite case: any client subscribing to events from here,
* must provide its own http endpoint that has such a method!
*/
public class NoticeChangedSubjectsResponse {
  
  // Out-Argument of 'NoticeChangedSubjects' (bool): an array, which contains one element per changed record
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
* Contains arguments for calling 'SearchSubjects'.
* Method: Searches Subjects by a given 'filter' (if provided),
* sorts the results by the given 'sortingField' (if provided) and
* returns an array of SubjectUids for the matching records.
*/
public class SearchSubjectsRequest {
  
  // Optional Argument for 'SearchSubjects' (string): A fieldname, which should be used to sort the result (can also be a 'CustomField'). If not provided, the result will be sorted by the creation date of the records
  public string $sortingField;
  
  // Optional Argument for 'SearchSubjects' (?bool): toggles the sorting direction
  public ?bool $sortDescending = null;
  
  // Optional Argument for 'SearchSubjects' (SubjectFilter): values by field name (can also be a 'CustomField') which will used as AND-linked filter
  public SubjectFilter $filter;
  
  // Optional Argument for 'SearchSubjects' (?bool): includes archived records in the result
  public ?bool $includeArchivedRecords = null;
  
  // Optional Argument for 'SearchSubjects' (?int): a value greather than zero will represent a maximum count of results, that sould be returned
  public ?int $limitResults = null;
  
}

/*
* Contains results from calling 'SearchSubjects'.
* Method: Searches Subjects by a given 'filter' (if provided),
* sorts the results by the given 'sortingField' (if provided) and
* returns an array of SubjectUids for the matching records.
*/
public class SearchSubjectsResponse {
  
  // Out-Argument of 'SearchSubjects' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'SearchChangedSubjects'.
* Method: Searches Subjects which have been modified after(or at) the given 'minTimestampUtc',
* matching to the given 'filter' (if provided).
* The result is sorted descenting by the timestamp of the modification (latest first) and will
* include archived records.
*/
public class SearchChangedSubjectsRequest {
  
  // Required Argument for 'SearchChangedSubjects' (int): start of the timespan to search (as UNIX-Timestamp)
  #[Required]
  public int $minTimestampUtc;
  
  // Optional Argument for 'SearchChangedSubjects' (SubjectFilter): values by field name (can also be a 'CustomField') which will used as AND-linked filter
  public SubjectFilter $filter;
  
}

/*
* Contains results from calling 'SearchChangedSubjects'.
* Method: Searches Subjects which have been modified after(or at) the given 'minTimestampUtc',
* matching to the given 'filter' (if provided).
* The result is sorted descenting by the timestamp of the modification (latest first) and will
* include archived records.
*/
public class SearchChangedSubjectsResponse {
  
  // Out-Argument of 'SearchChangedSubjects' (int): the exact timestamp of the search (as UNIX-Timestamp)
  #[Required]
  public int $latestTimestampUtc;
  
  // Out-Argument of 'SearchChangedSubjects' (array)
  #[Required]
  public array $createdRecords;
  
  // Out-Argument of 'SearchChangedSubjects' (array)
  #[Required]
  public array $modifiedRecords;
  
  // Out-Argument of 'SearchChangedSubjects' (array)
  #[Required]
  public array $archivedRecords;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'GetCustomFieldDescriptorsForSubject'.
*/
public class GetCustomFieldDescriptorsForSubjectRequest {
  
  // Optional Argument for 'GetCustomFieldDescriptorsForSubject' (string): Preferred language for the 'DisplayLabel' and 'InputDescription' fields of the returned descriptors. The default is 'EN'.
  public string $languagePref;
  
}

/*
* Contains results from calling 'GetCustomFieldDescriptorsForSubject'.
*/
public class GetCustomFieldDescriptorsForSubjectResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCustomFieldDescriptorsForSubject' (CustomFieldDescriptor[])
  public array $return;
  
}

/*
* Contains arguments for calling 'CheckSubjectExisitence'.
* Method: Checks the existence of 'Subjects' for a given list of subjectUids
*/
public class CheckSubjectExisitenceRequest {
  
  // Required Argument for 'CheckSubjectExisitence' (array)
  #[Required]
  public array $subjectUids;
  
}

/*
* Contains results from calling 'CheckSubjectExisitence'.
* Method: Checks the existence of 'Subjects' for a given list of subjectUids
*/
public class CheckSubjectExisitenceResponse {
  
  // Out-Argument of 'CheckSubjectExisitence' (array)
  #[Required]
  public array $unavailableSubjectUids;
  
  // Out-Argument of 'CheckSubjectExisitence' (array)
  #[Required]
  public array $availableSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'GetSubjectFields'.
* Method: loads the requested Subjects and returns lightweight json objects (without childs),
* which are optimized to be displayed as table (the most common UI use case).
* This models containig a combination of:
* essential fieds from the record,
* calculated fields (numbers of child records),
* custom fields (choosen by the service)
*/
public class GetSubjectFieldsRequest {
  
  // Required Argument for 'GetSubjectFields' (array)
  #[Required]
  public array $subjectUids;
  
}

/*
* Contains results from calling 'GetSubjectFields'.
* Method: loads the requested Subjects and returns lightweight json objects (without childs),
* which are optimized to be displayed as table (the most common UI use case).
* This models containig a combination of:
* essential fieds from the record,
* calculated fields (numbers of child records),
* custom fields (choosen by the service)
*/
public class GetSubjectFieldsResponse {
  
  // Out-Argument of 'GetSubjectFields' (array)
  #[Required]
  public array $unavailableSubjectUids;
  
  // Out-Argument of 'GetSubjectFields' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ExportSubjects'.
* Method: exports full 'SubjectStructures'
*/
public class ExportSubjectsRequest {
  
  // Required Argument for 'ExportSubjects' (array)
  #[Required]
  public array $subjectUids;
  
}

/*
* Contains results from calling 'ExportSubjects'.
* Method: exports full 'SubjectStructures'
*/
public class ExportSubjectsResponse {
  
  // Out-Argument of 'ExportSubjects' (array)
  #[Required]
  public array $unavailableSubjectUids;
  
  // Out-Argument of 'ExportSubjects' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ExportSubjectFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ExportSubjectFhirRessourcesRequest {
  
  // Required Argument for 'ExportSubjectFhirRessources' (string)
  #[Required]
  public string $subjectUid;
  
}

/*
* Contains results from calling 'ExportSubjectFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ExportSubjectFhirRessourcesResponse {
  
  // Out-Argument of 'ExportSubjectFhirRessources' (array)
  #[Required]
  public array $subjectFhirRessources;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'ExportSubjectFhirRessources' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'ImportSubjectFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ImportSubjectFhirRessourcesRequest {
  
  // Required Argument for 'ImportSubjectFhirRessources' (array): A structure containing HL7/FHIR-Ressources (JSON only) and the essential fields which are required to qualify a ORSCF record.
  #[Required]
  public array $subjectFhirRessources;
  
}

/*
* Contains results from calling 'ImportSubjectFhirRessources'.
* Method: Exports a structure containing HL7/FHIR-Ressources (JSON only) and
* the essential fields which are required to qualify a ORSCF record.
*/
public class ImportSubjectFhirRessourcesResponse {
  
  // Out-Argument of 'ImportSubjectFhirRessources' (array)
  #[Required]
  public array $createdSubjectUids;
  
  // Out-Argument of 'ImportSubjectFhirRessources' (array)
  #[Required]
  public array $updatedSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ArchiveSubjects'.
*/
public class ArchiveSubjectsRequest {
  
  // Required Argument for 'ArchiveSubjects' (array)
  #[Required]
  public array $subjectUids;
  
}

/*
* Contains results from calling 'ArchiveSubjects'.
*/
public class ArchiveSubjectsResponse {
  
  // Out-Argument of 'ArchiveSubjects' (array): also including the Uids of already archived records
  #[Required]
  public array $archivedSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'UnarchiveSubjects'.
*/
public class UnarchiveSubjectsRequest {
  
  // Required Argument for 'UnarchiveSubjects' (array)
  #[Required]
  public array $subjectUids;
  
}

/*
* Contains results from calling 'UnarchiveSubjects'.
*/
public class UnarchiveSubjectsResponse {
  
  // Out-Argument of 'UnarchiveSubjects' (array)
  #[Required]
  public array $unarchivedSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ApplySubjectMutations'.
*/
public class ApplySubjectMutationsRequest {
  
  // Required Argument for 'ApplySubjectMutations' (object)
  #[Required]
  public object $mutationsBySubjecttUid;
  
}

/*
* Contains results from calling 'ApplySubjectMutations'.
*/
public class ApplySubjectMutationsResponse {
  
  // Out-Argument of 'ApplySubjectMutations' (array)
  #[Required]
  public array $updatedSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ApplySubjectBatchMutation'.
*/
public class ApplySubjectBatchMutationRequest {
  
  // Required Argument for 'ApplySubjectBatchMutation' (array)
  #[Required]
  public array $subjectUids;
  
  // Required Argument for 'ApplySubjectBatchMutation' (BatchableSubjectMutation)
  #[Required]
  public BatchableSubjectMutation $mutation;
  
}

/*
* Contains results from calling 'ApplySubjectBatchMutation'.
*/
public class ApplySubjectBatchMutationResponse {
  
  // Out-Argument of 'ApplySubjectBatchMutation' (array)
  #[Required]
  public array $updatedSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ImportSubjects'.
*/
public class ImportSubjectsRequest {
  
  // Required Argument for 'ImportSubjects' (array)
  #[Required]
  public array $subjects;
  
}

/*
* Contains results from calling 'ImportSubjects'.
*/
public class ImportSubjectsResponse {
  
  // Out-Argument of 'ImportSubjects' (array)
  #[Required]
  public array $createdSubjectUids;
  
  // Out-Argument of 'ImportSubjects' (array)
  #[Required]
  public array $updatedSubjectUids;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}
