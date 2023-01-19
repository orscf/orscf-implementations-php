<?php
/* based on ORSCF IdentityManagement Contract v1.9.0.11852 */

include 'models.php';

/*
* Contains arguments for calling 'GrantClearanceForUnblinding'.
*/
public class GrantClearanceForUnblindingRequest {
  
  // Required Argument for 'GrantClearanceForUnblinding' (string)
  #[Required]
  public string $unblindingToken;
  
  // Required Argument for 'GrantClearanceForUnblinding' (array)
  #[Required]
  public array $pseudonymsToUnblind;
  
  // Required Argument for 'GrantClearanceForUnblinding' (string)
  #[Required]
  public string $grantedUnitl;
  
}

/*
* Contains results from calling 'GrantClearanceForUnblinding'.
*/
public class GrantClearanceForUnblindingResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'HasClearanceForUnblinding'.
* Method: Returns:
* 1: if clearance granted /
* 0: if no realtime response is possible (delayed approval)
* -1: if a new unblindingToken is required (because the current has expired or has been repressed) /
* -2: if the access is denied for addressed scope of data
*/
public class HasClearanceForUnblindingRequest {
  
  // Required Argument for 'HasClearanceForUnblinding' (string)
  #[Required]
  public string $unblindingToken;
  
  // Required Argument for 'HasClearanceForUnblinding' (array)
  #[Required]
  public array $pseudonymsToUnblind;
  
  // Required Argument for 'HasClearanceForUnblinding' (object): an optional container that can contain for example the ipadress or JWT token of the accessor or some MFA related information
  #[Required]
  public object $accessRelatedDetails;
  
}

/*
* Contains results from calling 'HasClearanceForUnblinding'.
* Method: Returns:
* 1: if clearance granted /
* 0: if no realtime response is possible (delayed approval)
* -1: if a new unblindingToken is required (because the current has expired or has been repressed) /
* -2: if the access is denied for addressed scope of data
*/
public class HasClearanceForUnblindingResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'HasClearanceForUnblinding' (Int32)
  public int $return;
  
}

/*
* Contains arguments for calling 'EvaluateAge'.
* Method: Calculates the age (only the integer Year) of several persons for a given date.
* This is supporting the very common usecase to evaluate inclusion criteria for research studies where the date of birth is not present alongside of the medical data.
* It allows for minimalist access disclosing the date of birth information (as happening when unblinding).
*/
public class EvaluateAgeRequest {
  
  // Required Argument for 'EvaluateAge' (string)
  #[Required]
  public string $momentOfValuation;
  
  // Required Argument for 'EvaluateAge' (array)
  #[Required]
  public array $pseudonymesToEvaluate;
  
}

/*
* Contains results from calling 'EvaluateAge'.
* Method: Calculates the age (only the integer Year) of several persons for a given date.
* This is supporting the very common usecase to evaluate inclusion criteria for research studies where the date of birth is not present alongside of the medical data.
* It allows for minimalist access disclosing the date of birth information (as happening when unblinding).
*/
public class EvaluateAgeResponse {
  
  // Out-Argument of 'EvaluateAge' (array): Returns an array with the same amount of fields as the given 'pseudonymesToEvaluate'-array. If it was not possible to evalute the age beacuse of not present data, then the corresponding array-field will contain a value of -1!
  #[Required]
  public array $ages;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
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
* 'ImsApiInfo',
* 'Pseudonymization',
* 'AgeEvaluation',
* 'Unblinding',
* 'UnblindingClearanceAwaiter'  (backend workflow for "PASSIVE-APPROVAL"),
* 'UnblindingClearanceGranting' (backend workflow for "ACTIVE-APPROVAL")
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'ImsApiInfo',
* 'Pseudonymization',
* 'AgeEvaluation',
* 'Unblinding',
* 'UnblindingClearanceAwaiter'  (backend workflow for "PASSIVE-APPROVAL"),
* 'UnblindingClearanceGranting' (backend workflow for "ACTIVE-APPROVAL")
*/
public class GetCapabilitiesResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCapabilities' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:Pseudonymization") and/or
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
* Method: returns a list of available capabilities ("API:Pseudonymization") and/or
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
* Contains arguments for calling 'GetExtendedFieldDescriptors'.
*/
public class GetExtendedFieldDescriptorsRequest {
  
  // Optional Argument for 'GetExtendedFieldDescriptors' (string): Preferred language for the 'DisplayLabel' and 'InputDescription' fields of the returned descriptors. ONLY RELEVANT FOR THE UI!
  public string $languagePref;
  
}

/*
* Contains results from calling 'GetExtendedFieldDescriptors'.
*/
public class GetExtendedFieldDescriptorsResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetExtendedFieldDescriptors' (ExtendedFieldDescriptor[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetOrCreatePseudonym'.
*/
public class GetOrCreatePseudonymRequest {
  
  // Required Argument for 'GetOrCreatePseudonym' (string): the Firstname a person (named as in the HL7 standard)
  #[Required]
  public string $givenName;
  
  // Required Argument for 'GetOrCreatePseudonym' (string)
  #[Required]
  public string $familyName;
  
  // Required Argument for 'GetOrCreatePseudonym' (string): date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  #[Required]
  public string $birthDate;
  
  // Required Argument for 'GetOrCreatePseudonym' (object): additional values for each 'extendedField' that is mandatory within (and specific to) the current IMS-System. To retrieve the declarations for such fields call 'GetExtendedFieldDescriptors'
  #[Required]
  public object $extendedFields;
  
}

/*
* Contains results from calling 'GetOrCreatePseudonym'.
*/
public class GetOrCreatePseudonymResponse {
  
  // Out-Argument of 'GetOrCreatePseudonym' (string)
  #[Required]
  public string $pseudonym;
  
  // Out-Argument of 'GetOrCreatePseudonym' (bool)
  #[Required]
  public bool $wasCreatedNewly;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetOrCreatePseudonym' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'GetExisitingPseudonym'.
*/
public class GetExisitingPseudonymRequest {
  
  // Required Argument for 'GetExisitingPseudonym' (string)
  #[Required]
  public string $givenName;
  
  // Required Argument for 'GetExisitingPseudonym' (string)
  #[Required]
  public string $familyName;
  
  // Required Argument for 'GetExisitingPseudonym' (string): date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  #[Required]
  public string $birthDate;
  
  // Required Argument for 'GetExisitingPseudonym' (object): additional values for each 'extendedField' that is mandatory within (and specific to) the current IMS-System. To retrieve the declarations for such fields call 'GetExtendedFieldDescriptors'
  #[Required]
  public object $extendedFields;
  
}

/*
* Contains results from calling 'GetExisitingPseudonym'.
*/
public class GetExisitingPseudonymResponse {
  
  // Out-Argument of 'GetExisitingPseudonym' (string)
  #[Required]
  public string $pseudonym;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetExisitingPseudonym' (Boolean)
  public bool $return;
  
}

/*
* Contains arguments for calling 'RequestUnblindingToken'.
* Method: Returns:
* 1: if clearance granted (token can be DIRECTLY used to call 'TryUnblind') /
* 0: if no realtime response is possible (delayed approval is outstanding)
* -1: if a new unblindingToken is required (because the current has expired or has been repressed) /
* -2: if the access is denied for addressed scope of data
*/
public class RequestUnblindingTokenRequest {
  
  // Required Argument for 'RequestUnblindingToken' (array)
  #[Required]
  public array $pseudonymsToUnblind;
  
  // Required Argument for 'RequestUnblindingToken' (string)
  #[Required]
  public string $requestReason;
  
  // Required Argument for 'RequestUnblindingToken' (string)
  #[Required]
  public string $requestBy;
  
}

/*
* Contains results from calling 'RequestUnblindingToken'.
* Method: Returns:
* 1: if clearance granted (token can be DIRECTLY used to call 'TryUnblind') /
* 0: if no realtime response is possible (delayed approval is outstanding)
* -1: if a new unblindingToken is required (because the current has expired or has been repressed) /
* -2: if the access is denied for addressed scope of data
*/
public class RequestUnblindingTokenResponse {
  
  // Out-Argument of 'RequestUnblindingToken' (string)
  #[Required]
  public string $unblindingToken;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'RequestUnblindingToken' (Int32)
  public int $return;
  
}

/*
* Contains arguments for calling 'TryUnblind'.
* Method: Returns:
* 1: on SUCCESS (unblindedIdentities should contain data) /
* 0: if no realtime response is possible (delayed approval is outstanding)
* -1: if a new unblindingToken is required (because the current has expired or has been repressed) /
* -2: if the access is denied for addressed scope of data
*/
public class TryUnblindRequest {
  
  // Required Argument for 'TryUnblind' (string)
  #[Required]
  public string $unblindingToken;
  
  // Required Argument for 'TryUnblind' (array)
  #[Required]
  public array $pseudonymsToUnblind;
  
  // Required Argument for 'TryUnblind' (array)
  #[Required]
  public array $unblindedIdentities;
  
}

/*
* Contains results from calling 'TryUnblind'.
* Method: Returns:
* 1: on SUCCESS (unblindedIdentities should contain data) /
* 0: if no realtime response is possible (delayed approval is outstanding)
* -1: if a new unblindingToken is required (because the current has expired or has been repressed) /
* -2: if the access is denied for addressed scope of data
*/
public class TryUnblindResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'TryUnblind' (Int32)
  public int $return;
  
}
