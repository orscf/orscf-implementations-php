<?php
/* based on ORSCF StudyManagement Contract v1.8.0.0 */

include 'models.php';

public interface IInstituteMgmtService {
  
  /*
  * GetInstituteUidByTitle
  *
  * @param $instituteTitle
  */
  function GetInstituteUidByTitle(string $instituteTitle): string;
  
  /*
  * GetInstituteTitleByUid
  *
  * @param $instituteUid
  */
  function GetInstituteTitleByUid(string $instituteUid): string;
  
  /*
  * ArchiveInstitute
  *
  * @param $instituteUid
  */
  function ArchiveInstitute(string $instituteUid): string;
  
  /*
  * GetInstituteInfos
  *
  * @param $instituteUid
  */
  function GetInstituteInfos(string $instituteUid): string;
  
  /*
  * ensures, that an institute with the given Uid exists and returns true, if it has been newly created
  *
  * @param $instituteUid
  */
  function CreateInstituteIfMissing(string $instituteUid): bool;
  
  /*
  * updated the title of the the institute or returns false, if there is no record for the given instituteUid
  *
  * @param $instituteUid
  * @param $newTitle
  */
  function UpdateInstitueTitle(string $instituteUid, string $newTitle): bool;
  
}

public interface ISiteParticipationService {
  
}

public interface ISmsApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'InstituteMgmt', 'StudySetup', 'StudyAccess', 'SiteParticipation'
  */
  function GetCapabilities(): array;
  
  /*
  * returns a list of available capabilities ("API:StudyAccess") and/or data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72") which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be: 0=auth needed / 1=authenticated / -1=auth expired / -2=auth invalid/disabled
  *
  * @param $authState
  */
  function GetPermittedAuthScopes(int &$authState): array;
  
  /*
  * OPTIONAL: If the authentication on the current service is mapped using tokens and should provide information about the source at this point, the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
  */
  function GetOAuthTokenRequestUrl(): string;
  
}

public interface IStudyAccessService {
  
  /*
  * Subscribes the Event when the State of a Study was changed to the given "EventQueue" which is accessable via "EventQueueService" (including http notifications)
  *
  * @param $eventQueueId
  */
  function SubscribeStudyStateChangedEvents(string $eventQueueId): bool;
  
  /*
  * Unsubscribes the Event when the State of a Study was changed for the given "EventQueue"
  *
  * @param $eventQueueId
  */
  function UnsubscribeStudyStateChangedEvents(string $eventQueueId): bool;
  
}

public interface IStudySetupService {
  
  /*
  * returns null, if there is no matching record
  *
  * @param $studyIdentifier
  */
  function GetStudyTitleByIdentifier(string $studyIdentifier): string;
  
}
