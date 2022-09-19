<?php
/* based on ORSCF IdentityManagement Contract v1.8.0.0 */

include 'models.php';

/*
* Contains arguments for calling 'RequestUnblindingToken'.
* Method: returns an unblindingToken which is not activated
*/
public class RequestUnblindingTokenRequest {
  
  // Required Argument for 'RequestUnblindingToken' (string)
  #[Required]
  public string $researchStudyName;
  
  // Required Argument for 'RequestUnblindingToken' (string)
  #[Required]
  public string $subjectId;
  
  // Required Argument for 'RequestUnblindingToken' (string)
  #[Required]
  public string $reason;
  
  // Required Argument for 'RequestUnblindingToken' (string)
  #[Required]
  public string $requestingPerson;
  
}

/*
* Contains results from calling 'RequestUnblindingToken'.
* Method: returns an unblindingToken which is not activated
*/
public class RequestUnblindingTokenResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'RequestUnblindingToken' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'GetUnblindingTokenState'.
* Method: 0: not activated yet, 1=activated (can be used for 'UnblindSubject'), 2=expired/already used
*/
public class GetUnblindingTokenStateRequest {
  
  // Required Argument for 'GetUnblindingTokenState' (string)
  #[Required]
  public string $unblindingToken;
  
}

/*
* Contains results from calling 'GetUnblindingTokenState'.
* Method: 0: not activated yet, 1=activated (can be used for 'UnblindSubject'), 2=expired/already used
*/
public class GetUnblindingTokenStateResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetUnblindingTokenState' (Int32)
  public int $return;
  
}

/*
* Contains arguments for calling 'UnblindSubject'.
* Method: (only works with an activated unblindingOtp )
*/
public class UnblindSubjectRequest {
  
  // Required Argument for 'UnblindSubject' (string)
  #[Required]
  public string $researchStudyName;
  
  // Required Argument for 'UnblindSubject' (string)
  #[Required]
  public string $subjectId;
  
  // Required Argument for 'UnblindSubject' (string)
  #[Required]
  public string $unblindingToken;
  
}

/*
* Contains results from calling 'UnblindSubject'.
* Method: (only works with an activated unblindingOtp )
*/
public class UnblindSubjectResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'UnblindSubject' (IdentityDetails)
  public IdentityDetails $return;
  
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
* 'Pseudonymization', 'IdentityUnblinding',
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'Pseudonymization', 'IdentityUnblinding',
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
  
  // Optional Argument for 'GetExtendedFieldDescriptors' (string): Preferred language for the 'DisplayLabel' and 'InputDescription' fields of the returned descriptors.
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
  
  // Required Argument for 'GetOrCreatePseudonym' (string): A UUID
  #[Required]
  public string $researchStudyUid;
  
  // Required Argument for 'GetOrCreatePseudonym' (string): the Firstname a the paticipant (named as in the HL7 standard)
  #[Required]
  public string $givenName;
  
  // Required Argument for 'GetOrCreatePseudonym' (string)
  #[Required]
  public string $familyName;
  
  // Required Argument for 'GetOrCreatePseudonym' (string): date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  #[Required]
  public string $birthDate;
  
  // Required Argument for 'GetOrCreatePseudonym' (object)
  #[Required]
  public object $extendedFields;
  
  // Required Argument for 'GetOrCreatePseudonym' (string): A UUID
  #[Required]
  public string $siteUid;
  
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
  
  // Required Argument for 'GetExisitingPseudonym' (string): A UUID
  #[Required]
  public string $researchStudyUid;
  
  // Required Argument for 'GetExisitingPseudonym' (string)
  #[Required]
  public string $givenName;
  
  // Required Argument for 'GetExisitingPseudonym' (string)
  #[Required]
  public string $familyName;
  
  // Required Argument for 'GetExisitingPseudonym' (string): date in format 'yyyy-MM-dd' (must NOT be a partial date for this usecase!)
  #[Required]
  public string $birthDate;
  
  // Required Argument for 'GetExisitingPseudonym' (object)
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
