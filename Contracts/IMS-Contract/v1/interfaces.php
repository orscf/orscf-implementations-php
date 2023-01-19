<?php
/* based on ORSCF IdentityManagement Contract v1.9.0.11852 */

include 'models.php';

public interface IUnblindingClearanceAwaiterService {
  
  /*
  * GrantClearanceForUnblinding
  *
  * @param $unblindingToken
  * @param $pseudonymsToUnblind
  * @param $grantedUnitl
  */
  function GrantClearanceForUnblinding(string $unblindingToken, array $pseudonymsToUnblind, string $grantedUnitl);
  
}

public interface IUnblindingClearanceGrantingService {
  
  /*
  * Returns: 1: if clearance granted / 0: if no realtime response is possible (delayed approval) -1: if a new unblindingToken is required (because the current has expired or has been repressed) / -2: if the access is denied for addressed scope of data
  *
  * @param $unblindingToken
  * @param $pseudonymsToUnblind
  * @param $accessRelatedDetails an optional container that can contain for example the ipadress
   or JWT token of the accessor or some MFA related information
  */
  function HasClearanceForUnblinding(string $unblindingToken, array $pseudonymsToUnblind, object $accessRelatedDetails): int;
  
}

public interface IAgeEvaluationService {
  
  /*
  * Calculates the age (only the integer Year) of several persons for a given date. This is supporting the very common usecase to evaluate inclusion criteria for research studies where the date of birth is not present alongside of the medical data. It allows for minimalist access disclosing the date of birth information (as happening when unblinding).
  *
  * @param $momentOfValuation
  * @param $pseudonymesToEvaluate
  * @param $ages Returns an array with the same amount of fields as the given 'pseudonymesToEvaluate'-array.
   If it was not possible to evalute the age beacuse of not present data, then the corresponding array-field
   will contain a value of -1!
  */
  function EvaluateAge(string $momentOfValuation, array $pseudonymesToEvaluate, array &$ages);
  
}

public interface IImsApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'ImsApiInfo', 'Pseudonymization', 'AgeEvaluation', 'Unblinding', 'UnblindingClearanceAwaiter'  (backend workflow for "PASSIVE-APPROVAL"), 'UnblindingClearanceGranting' (backend workflow for "ACTIVE-APPROVAL")
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
  
  /*
  * GetExtendedFieldDescriptors
  *
  * @param $languagePref Preferred language for the 'DisplayLabel' and 'InputDescription' fields of the returned descriptors.
   ONLY RELEVANT FOR THE UI!
  */
  function GetExtendedFieldDescriptors(string $languagePref): array;
  
}

public interface IPseudonymizationService {
  
  /*
  * GetOrCreatePseudonym
  *
  * @param $givenName the Firstname a person (named as in the HL7 standard)
  * @param $familyName
  * @param $birthDate date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  * @param $extendedFields additional values for each 'extendedField' that is mandatory within (and specific to) the current IMS-System. To retrieve the declarations for such fields call 'GetExtendedFieldDescriptors'
  * @param $pseudonym
  * @param $wasCreatedNewly
  */
  function GetOrCreatePseudonym(string $givenName, string $familyName, string $birthDate, object $extendedFields, string &$pseudonym, bool &$wasCreatedNewly): bool;
  
  /*
  * GetExisitingPseudonym
  *
  * @param $givenName
  * @param $familyName
  * @param $birthDate date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  * @param $extendedFields additional values for each 'extendedField' that is mandatory within (and specific to) the current IMS-System. To retrieve the declarations for such fields call 'GetExtendedFieldDescriptors'
  * @param $pseudonym
  */
  function GetExisitingPseudonym(string $givenName, string $familyName, string $birthDate, object $extendedFields, string &$pseudonym): bool;
  
}

public interface IUnblindingService {
  
  /*
  * Returns: 1: if clearance granted (token can be DIRECTLY used to call 'TryUnblind') / 0: if no realtime response is possible (delayed approval is outstanding) -1: if a new unblindingToken is required (because the current has expired or has been repressed) / -2: if the access is denied for addressed scope of data
  *
  * @param $pseudonymsToUnblind
  * @param $requestReason
  * @param $requestBy
  * @param $unblindingToken
  */
  function RequestUnblindingToken(array $pseudonymsToUnblind, string $requestReason, string $requestBy, string &$unblindingToken): int;
  
  /*
  * Returns: 1: on SUCCESS (unblindedIdentities should contain data) / 0: if no realtime response is possible (delayed approval is outstanding) -1: if a new unblindingToken is required (because the current has expired or has been repressed) / -2: if the access is denied for addressed scope of data
  *
  * @param $unblindingToken
  * @param $pseudonymsToUnblind
  * @param $unblindedIdentities
  */
  function TryUnblind(string $unblindingToken, array $pseudonymsToUnblind, array $unblindedIdentities): int;
  
}
