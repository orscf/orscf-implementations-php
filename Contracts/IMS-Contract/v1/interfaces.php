<?php
/* based on ORSCF IdentityManagement Contract v1.8.0.0 */

include 'models.php';

public interface IIdentityUnblindingService {
  
  /*
  * returns an unblindingToken which is not activated
  *
  * @param $researchStudyName
  * @param $subjectId
  * @param $reason
  * @param $requestingPerson
  */
  function RequestUnblindingToken(string $researchStudyName, string $subjectId, string $reason, string $requestingPerson): string;
  
  /*
  * 0: not activated yet, 1=activated (can be used for 'UnblindSubject'), 2=expired/already used
  *
  * @param $unblindingToken
  */
  function GetUnblindingTokenState(string $unblindingToken): int;
  
  /*
  * (only works with an activated unblindingOtp )
  *
  * @param $researchStudyName
  * @param $subjectId
  * @param $unblindingToken
  */
  function UnblindSubject(string $researchStudyName, string $subjectId, string $unblindingToken): IdentityDetails;
  
}

public interface IImsApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'Pseudonymization', 'IdentityUnblinding',
  */
  function GetCapabilities(): array;
  
  /*
  * returns a list of available capabilities ("API:Pseudonymization") and/or data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72") which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be: 0=auth needed / 1=authenticated / -1=auth expired / -2=auth invalid/disabled
  *
  * @param $authState
  */
  function GetPermittedAuthScopes(int &$authState): array;
  
  /*
  * OPTIONAL: If the authentication on the current service is mapped using tokens and should provide information about the source at this point, the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
  */
  function GetOAuthTokenRequestUrl(): string;
  
}

public interface IPseudonymizationService {
  
  /*
  * GetExtendedFieldDescriptors
  *
  * @param $languagePref Preferred language for the 'DisplayLabel' and 'InputDescription' fields of the returned descriptors.
  */
  function GetExtendedFieldDescriptors(string $languagePref): array;
  
  /*
  * GetOrCreatePseudonym
  *
  * @param $researchStudyUid A UUID
  * @param $givenName the Firstname a the paticipant (named as in the HL7 standard)
  * @param $familyName
  * @param $birthDate date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  * @param $extendedFields
  * @param $siteUid A UUID
  * @param $pseudonym
  * @param $wasCreatedNewly
  */
  function GetOrCreatePseudonym(string $researchStudyUid, string $givenName, string $familyName, string $birthDate, object $extendedFields, string $siteUid, string &$pseudonym, bool &$wasCreatedNewly): bool;
  
  /*
  * GetExisitingPseudonym
  *
  * @param $researchStudyUid A UUID
  * @param $givenName
  * @param $familyName
  * @param $birthDate date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  * @param $extendedFields
  * @param $pseudonym
  */
  function GetExisitingPseudonym(string $researchStudyUid, string $givenName, string $familyName, string $birthDate, object $extendedFields, string &$pseudonym): bool;
  
}
