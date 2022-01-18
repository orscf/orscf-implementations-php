<?php
/* based on ORSCF SubjectData Contract v1.7.0.0 */

include 'models.php';

public interface ISdrApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'SubjectOverview', 'SubjectEnrollment', 'ParticipationStateMgmt'
  */
  function GetCapabilities(): array;
  
  /*
  * returns a list of available capabilities ("API:SubjectOverview") and/or data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72") which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be: 0=auth needed / 1=authenticated / -1=auth expired / -2=auth invalid/disabled
  *
  * @param $authState
  */
  function GetPermittedAuthScopes(int &$authState): array;
  
  /*
  * OPTIONAL: If the authentication on the current service is mapped using tokens and should provide information about the source at this point, the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
  */
  function GetOAuthTokenRequestUrl(): string;
  
}

public interface IParticipationStateMgmtService {
  
}

public interface ISubjectEnrollmentService {
  
  /*
  * returns the null on failure or the assigned SubjectIdentifier on success
  *
  * @param $researchStudyName
  * @param $siteName
  * @param $dateOfEnrollment
  * @param $details
  * @param $preDefinedSubjectId
  */
  function EnrollIdentityAsSubject(string $researchStudyName, string $siteName, string $dateOfEnrollment, IdentityDetails $details, string $preDefinedSubjectId): string;
  
  /*
  * UpdateIdentityInformationBySubjectId
  *
  * @param $researchStudyName
  * @param $subjectId
  * @param $newDetails
  * @param $clearUnsuppliedValues
  * @param $newSiteName
  */
  function UpdateIdentityInformationBySubjectId(string $researchStudyName, string $subjectId, IdentityDetails $newDetails, bool $clearUnsuppliedValues, string $newSiteName): bool;
  
  /*
  * GetSiteNameBySubjectId
  *
  * @param $researchStudyName
  * @param $subjectId
  */
  function GetSiteNameBySubjectId(string $researchStudyName, string $subjectId): string;
  
}

public interface ISubjectOverviewService {
  
}
