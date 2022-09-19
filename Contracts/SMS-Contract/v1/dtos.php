<?php
/* based on ORSCF StudyManagement Contract v1.8.0.0 */

include 'models.php';

/*
* Contains arguments for calling 'GetInstituteUidByTitle'.
*/
public class GetInstituteUidByTitleRequest {
  
  // Required Argument for 'GetInstituteUidByTitle' (string)
  #[Required]
  public string $instituteTitle;
  
}

/*
* Contains results from calling 'GetInstituteUidByTitle'.
*/
public class GetInstituteUidByTitleResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetInstituteUidByTitle' (Guid)
  public string $return;
  
}

/*
* Contains arguments for calling 'GetInstituteTitleByUid'.
*/
public class GetInstituteTitleByUidRequest {
  
  // Required Argument for 'GetInstituteTitleByUid' (string)
  #[Required]
  public string $instituteUid;
  
}

/*
* Contains results from calling 'GetInstituteTitleByUid'.
*/
public class GetInstituteTitleByUidResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetInstituteTitleByUid' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'ArchiveInstitute'.
*/
public class ArchiveInstituteRequest {
  
  // Required Argument for 'ArchiveInstitute' (string)
  #[Required]
  public string $instituteUid;
  
}

/*
* Contains results from calling 'ArchiveInstitute'.
*/
public class ArchiveInstituteResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'ArchiveInstitute' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'GetInstituteInfos'.
*/
public class GetInstituteInfosRequest {
  
  // Required Argument for 'GetInstituteInfos' (string)
  #[Required]
  public string $instituteUid;
  
}

/*
* Contains results from calling 'GetInstituteInfos'.
*/
public class GetInstituteInfosResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetInstituteInfos' (InstituteInfo[])
  public array $return;
  
}

/*
* Contains arguments for calling 'CreateInstituteIfMissing'.
* Method: ensures, that an institute with the given Uid exists
* and returns true, if it has been newly created
*/
public class CreateInstituteIfMissingRequest {
  
  // Required Argument for 'CreateInstituteIfMissing' (string)
  #[Required]
  public string $instituteUid;
  
}

/*
* Contains results from calling 'CreateInstituteIfMissing'.
* Method: ensures, that an institute with the given Uid exists
* and returns true, if it has been newly created
*/
public class CreateInstituteIfMissingResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'CreateInstituteIfMissing' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'UpdateInstitueTitle'.
* Method: updated the title of the the institute or returns false,
* if there is no record for the given instituteUid
*/
public class UpdateInstitueTitleRequest {
  
  // Required Argument for 'UpdateInstitueTitle' (string)
  #[Required]
  public string $instituteUid;
  
  // Required Argument for 'UpdateInstitueTitle' (string)
  #[Required]
  public string $newTitle;
  
}

/*
* Contains results from calling 'UpdateInstitueTitle'.
* Method: updated the title of the the institute or returns false,
* if there is no record for the given instituteUid
*/
public class UpdateInstitueTitleResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'UpdateInstitueTitle' (Boolean)
  public bool $return;
  
}

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
* 'InstituteMgmt', 'StudySetup', 'StudyAccess', 'SiteParticipation'
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'InstituteMgmt', 'StudySetup', 'StudyAccess', 'SiteParticipation'
*/
public class GetCapabilitiesResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCapabilities' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:StudyAccess") and/or
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
* Method: returns a list of available capabilities ("API:StudyAccess") and/or
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
* Contains arguments for calling 'SubscribeStudyStateChangedEvents'.
* Method: Subscribes the Event when the State of a Study was changed
* to the given "EventQueue" which is accessable via "EventQueueService"
* (including http notifications)
*/
public class SubscribeStudyStateChangedEventsRequest {
  
  // Required Argument for 'SubscribeStudyStateChangedEvents' (string)
  #[Required]
  public string $eventQueueId;
  
}

/*
* Contains results from calling 'SubscribeStudyStateChangedEvents'.
* Method: Subscribes the Event when the State of a Study was changed
* to the given "EventQueue" which is accessable via "EventQueueService"
* (including http notifications)
*/
public class SubscribeStudyStateChangedEventsResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'SubscribeStudyStateChangedEvents' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'UnsubscribeStudyStateChangedEvents'.
* Method: Unsubscribes the Event when the State of a Study was changed
* for the given "EventQueue"
*/
public class UnsubscribeStudyStateChangedEventsRequest {
  
  // Required Argument for 'UnsubscribeStudyStateChangedEvents' (string)
  #[Required]
  public string $eventQueueId;
  
}

/*
* Contains results from calling 'UnsubscribeStudyStateChangedEvents'.
* Method: Unsubscribes the Event when the State of a Study was changed
* for the given "EventQueue"
*/
public class UnsubscribeStudyStateChangedEventsResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'UnsubscribeStudyStateChangedEvents' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'GetStudyTitleByIdentifier'.
* Method: returns null, if there is no matching record
*/
public class GetStudyTitleByIdentifierRequest {
  
  // Required Argument for 'GetStudyTitleByIdentifier' (string)
  #[Required]
  public string $studyIdentifier;
  
}

/*
* Contains results from calling 'GetStudyTitleByIdentifier'.
* Method: returns null, if there is no matching record
*/
public class GetStudyTitleByIdentifierResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetStudyTitleByIdentifier' (String)
  public string $return;
  
}
