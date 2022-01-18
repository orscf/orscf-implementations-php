<?php
/* based on ORSCF VisitData Contract v1.7.0.0 */

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
* 'VisitOverview', 'VisitScheduling', 'VisitDataConsume', 'VisitDataSubmission'
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'VisitOverview', 'VisitScheduling', 'VisitDataConsume', 'VisitDataSubmission'
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
