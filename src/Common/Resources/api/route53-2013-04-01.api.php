<?php return [
  'metadata' => [
    'apiVersion' => '2013-04-01',
    'endpointPrefix' => 'route53',
    'globalEndpoint' => 'route53.amazonaws.com',
    'serviceAbbreviation' => 'Route 53',
    'serviceFullName' => 'Amazon Route 53',
    'signatureVersion' => 'v3https',
    'protocol' => 'rest-xml',
  ],
  'operations' => [
    'AssociateVPCWithHostedZone' => [
      'name' => 'AssociateVPCWithHostedZone',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/hostedzone/{Id}/associatevpc',
      ],
      'input' => [
        'shape' => 'AssociateVPCWithHostedZoneRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'AssociateVPCWithHostedZoneRequest',
      ],
      'output' => [
        'shape' => 'AssociateVPCWithHostedZoneResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCId',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PublicZoneVPCAssociation',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ConflictingDomainExists',
          'exception' => true,
        ],
      ],
    ],
    'ChangeResourceRecordSets' => [
      'name' => 'ChangeResourceRecordSets',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/hostedzone/{Id}/rrset/',
      ],
      'input' => [
        'shape' => 'ChangeResourceRecordSetsRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'ChangeResourceRecordSetsRequest',
      ],
      'output' => [
        'shape' => 'ChangeResourceRecordSetsResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidChangeBatch',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PriorRequestNotComplete',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ChangeTagsForResource' => [
      'name' => 'ChangeTagsForResource',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/tags/{ResourceType}/{ResourceId}',
      ],
      'input' => [
        'shape' => 'ChangeTagsForResourceRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'ChangeTagsForResourceRequest',
      ],
      'output' => [
        'shape' => 'ChangeTagsForResourceResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PriorRequestNotComplete',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ThrottlingException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateHealthCheck' => [
      'name' => 'CreateHealthCheck',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/healthcheck',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateHealthCheckRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'CreateHealthCheckRequest',
      ],
      'output' => [
        'shape' => 'CreateHealthCheckResponse',
      ],
      'errors' => [
        [
          'shape' => 'TooManyHealthChecks',
          'exception' => true,
        ],
        [
          'shape' => 'HealthCheckAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateHostedZone' => [
      'name' => 'CreateHostedZone',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/hostedzone',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateHostedZoneRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'CreateHostedZoneRequest',
      ],
      'output' => [
        'shape' => 'CreateHostedZoneResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidDomainName',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'HostedZoneAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyHostedZones',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCId',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetNotAvailable',
          'exception' => true,
        ],
        [
          'shape' => 'ConflictingDomainExists',
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDelegationSet',
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetNotReusable',
          'exception' => true,
        ],
      ],
    ],
    'CreateReusableDelegationSet' => [
      'name' => 'CreateReusableDelegationSet',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/delegationset',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateReusableDelegationSetRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'CreateReusableDelegationSetRequest',
      ],
      'output' => [
        'shape' => 'CreateReusableDelegationSetResponse',
      ],
      'errors' => [
        [
          'shape' => 'DelegationSetAlreadyCreated',
          'exception' => true,
        ],
        [
          'shape' => 'LimitsExceeded',
          'exception' => true,
        ],
        [
          'shape' => 'HostedZoneNotFound',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetNotAvailable',
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetAlreadyReusable',
          'exception' => true,
        ],
      ],
    ],
    'DeleteHealthCheck' => [
      'name' => 'DeleteHealthCheck',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}',
      ],
      'input' => [
        'shape' => 'DeleteHealthCheckRequest',
      ],
      'output' => [
        'shape' => 'DeleteHealthCheckResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'HealthCheckInUse',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteHostedZone' => [
      'name' => 'DeleteHostedZone',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2013-04-01/hostedzone/{Id}',
      ],
      'input' => [
        'shape' => 'DeleteHostedZoneRequest',
      ],
      'output' => [
        'shape' => 'DeleteHostedZoneResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'HostedZoneNotEmpty',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PriorRequestNotComplete',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteReusableDelegationSet' => [
      'name' => 'DeleteReusableDelegationSet',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2013-04-01/delegationset/{Id}',
      ],
      'input' => [
        'shape' => 'DeleteReusableDelegationSetRequest',
      ],
      'output' => [
        'shape' => 'DeleteReusableDelegationSetResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDelegationSet',
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetInUse',
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetNotReusable',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DisassociateVPCFromHostedZone' => [
      'name' => 'DisassociateVPCFromHostedZone',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/hostedzone/{Id}/disassociatevpc',
      ],
      'input' => [
        'shape' => 'DisassociateVPCFromHostedZoneRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'DisassociateVPCFromHostedZoneRequest',
      ],
      'output' => [
        'shape' => 'DisassociateVPCFromHostedZoneResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCId',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'VPCAssociationNotFound',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LastVPCAssociation',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetChange' => [
      'name' => 'GetChange',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/change/{Id}',
      ],
      'input' => [
        'shape' => 'GetChangeRequest',
      ],
      'output' => [
        'shape' => 'GetChangeResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchChange',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetCheckerIpRanges' => [
      'name' => 'GetCheckerIpRanges',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/checkeripranges',
      ],
      'input' => [
        'shape' => 'GetCheckerIpRangesRequest',
      ],
      'output' => [
        'shape' => 'GetCheckerIpRangesResponse',
      ],
    ],
    'GetGeoLocation' => [
      'name' => 'GetGeoLocation',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/geolocation',
      ],
      'input' => [
        'shape' => 'GetGeoLocationRequest',
      ],
      'output' => [
        'shape' => 'GetGeoLocationResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchGeoLocation',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetHealthCheck' => [
      'name' => 'GetHealthCheck',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}',
      ],
      'input' => [
        'shape' => 'GetHealthCheckRequest',
      ],
      'output' => [
        'shape' => 'GetHealthCheckResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetHealthCheckCount' => [
      'name' => 'GetHealthCheckCount',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/healthcheckcount',
      ],
      'input' => [
        'shape' => 'GetHealthCheckCountRequest',
      ],
      'output' => [
        'shape' => 'GetHealthCheckCountResponse',
      ],
    ],
    'GetHealthCheckLastFailureReason' => [
      'name' => 'GetHealthCheckLastFailureReason',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}/lastfailurereason',
      ],
      'input' => [
        'shape' => 'GetHealthCheckLastFailureReasonRequest',
      ],
      'output' => [
        'shape' => 'GetHealthCheckLastFailureReasonResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetHealthCheckStatus' => [
      'name' => 'GetHealthCheckStatus',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}/status',
      ],
      'input' => [
        'shape' => 'GetHealthCheckStatusRequest',
      ],
      'output' => [
        'shape' => 'GetHealthCheckStatusResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetHostedZone' => [
      'name' => 'GetHostedZone',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/hostedzone/{Id}',
      ],
      'input' => [
        'shape' => 'GetHostedZoneRequest',
      ],
      'output' => [
        'shape' => 'GetHostedZoneResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetReusableDelegationSet' => [
      'name' => 'GetReusableDelegationSet',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/delegationset/{Id}',
      ],
      'input' => [
        'shape' => 'GetReusableDelegationSetRequest',
      ],
      'output' => [
        'shape' => 'GetReusableDelegationSetResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDelegationSet',
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetNotReusable',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListGeoLocations' => [
      'name' => 'ListGeoLocations',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/geolocations',
      ],
      'input' => [
        'shape' => 'ListGeoLocationsRequest',
      ],
      'output' => [
        'shape' => 'ListGeoLocationsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListHealthChecks' => [
      'name' => 'ListHealthChecks',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/healthcheck',
      ],
      'input' => [
        'shape' => 'ListHealthChecksRequest',
      ],
      'output' => [
        'shape' => 'ListHealthChecksResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IncompatibleVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListHostedZones' => [
      'name' => 'ListHostedZones',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/hostedzone',
      ],
      'input' => [
        'shape' => 'ListHostedZonesRequest',
      ],
      'output' => [
        'shape' => 'ListHostedZonesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDelegationSet',
          'exception' => true,
        ],
        [
          'shape' => 'DelegationSetNotReusable',
          'exception' => true,
        ],
      ],
    ],
    'ListResourceRecordSets' => [
      'name' => 'ListResourceRecordSets',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/hostedzone/{Id}/rrset',
      ],
      'input' => [
        'shape' => 'ListResourceRecordSetsRequest',
      ],
      'output' => [
        'shape' => 'ListResourceRecordSetsResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListReusableDelegationSets' => [
      'name' => 'ListReusableDelegationSets',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/delegationset',
      ],
      'input' => [
        'shape' => 'ListReusableDelegationSetsRequest',
      ],
      'output' => [
        'shape' => 'ListReusableDelegationSetsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListTagsForResource' => [
      'name' => 'ListTagsForResource',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2013-04-01/tags/{ResourceType}/{ResourceId}',
      ],
      'input' => [
        'shape' => 'ListTagsForResourceRequest',
      ],
      'output' => [
        'shape' => 'ListTagsForResourceResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PriorRequestNotComplete',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ThrottlingException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListTagsForResources' => [
      'name' => 'ListTagsForResources',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/tags/{ResourceType}',
      ],
      'input' => [
        'shape' => 'ListTagsForResourcesRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'ListTagsForResourcesRequest',
      ],
      'output' => [
        'shape' => 'ListTagsForResourcesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PriorRequestNotComplete',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ThrottlingException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateHealthCheck' => [
      'name' => 'UpdateHealthCheck',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}',
      ],
      'input' => [
        'shape' => 'UpdateHealthCheckRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'UpdateHealthCheckRequest',
      ],
      'output' => [
        'shape' => 'UpdateHealthCheckResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHealthCheck',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'HealthCheckVersionMismatch',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateHostedZoneComment' => [
      'name' => 'UpdateHostedZoneComment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2013-04-01/hostedzone/{Id}',
      ],
      'input' => [
        'shape' => 'UpdateHostedZoneCommentRequest',
        'xmlNamespace' => [
          'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/',
        ],
        'locationName' => 'UpdateHostedZoneCommentRequest',
      ],
      'output' => [
        'shape' => 'UpdateHostedZoneCommentResponse',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchHostedZone',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidInput',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AliasHealthEnabled' => [
      'type' => 'boolean',
    ],
    'AliasTarget' => [
      'type' => 'structure',
      'required' => [
        'HostedZoneId',
        'DNSName',
        'EvaluateTargetHealth',
      ],
      'members' => [
        'HostedZoneId' => [
          'shape' => 'ResourceId',
        ],
        'DNSName' => [
          'shape' => 'DNSName',
        ],
        'EvaluateTargetHealth' => [
          'shape' => 'AliasHealthEnabled',
        ],
      ],
    ],
    'AssociateVPCComment' => [
      'type' => 'string',
    ],
    'AssociateVPCWithHostedZoneRequest' => [
      'type' => 'structure',
      'required' => [
        'HostedZoneId',
        'VPC',
      ],
      'members' => [
        'HostedZoneId' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'VPC' => [
          'shape' => 'VPC',
        ],
        'Comment' => [
          'shape' => 'AssociateVPCComment',
        ],
      ],
    ],
    'AssociateVPCWithHostedZoneResponse' => [
      'type' => 'structure',
      'required' => [
        'ChangeInfo',
      ],
      'members' => [
        'ChangeInfo' => [
          'shape' => 'ChangeInfo',
        ],
      ],
    ],
    'Change' => [
      'type' => 'structure',
      'required' => [
        'Action',
        'ResourceRecordSet',
      ],
      'members' => [
        'Action' => [
          'shape' => 'ChangeAction',
        ],
        'ResourceRecordSet' => [
          'shape' => 'ResourceRecordSet',
        ],
      ],
    ],
    'ChangeAction' => [
      'type' => 'string',
      'enum' => [
        'CREATE',
        'DELETE',
        'UPSERT',
      ],
    ],
    'ChangeBatch' => [
      'type' => 'structure',
      'required' => [
        'Changes',
      ],
      'members' => [
        'Comment' => [
          'shape' => 'ResourceDescription',
        ],
        'Changes' => [
          'shape' => 'Changes',
        ],
      ],
    ],
    'ChangeInfo' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
        'SubmittedAt',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
        ],
        'Status' => [
          'shape' => 'ChangeStatus',
        ],
        'SubmittedAt' => [
          'shape' => 'TimeStamp',
        ],
        'Comment' => [
          'shape' => 'ResourceDescription',
        ],
      ],
    ],
    'ChangeResourceRecordSetsRequest' => [
      'type' => 'structure',
      'required' => [
        'HostedZoneId',
        'ChangeBatch',
      ],
      'members' => [
        'HostedZoneId' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'ChangeBatch' => [
          'shape' => 'ChangeBatch',
        ],
      ],
    ],
    'ChangeResourceRecordSetsResponse' => [
      'type' => 'structure',
      'required' => [
        'ChangeInfo',
      ],
      'members' => [
        'ChangeInfo' => [
          'shape' => 'ChangeInfo',
        ],
      ],
    ],
    'ChangeStatus' => [
      'type' => 'string',
      'enum' => [
        'PENDING',
        'INSYNC',
      ],
    ],
    'ChangeTagsForResourceRequest' => [
      'type' => 'structure',
      'required' => [
        'ResourceType',
        'ResourceId',
      ],
      'members' => [
        'ResourceType' => [
          'shape' => 'TagResourceType',
          'location' => 'uri',
          'locationName' => 'ResourceType',
        ],
        'ResourceId' => [
          'shape' => 'TagResourceId',
          'location' => 'uri',
          'locationName' => 'ResourceId',
        ],
        'AddTags' => [
          'shape' => 'TagList',
        ],
        'RemoveTagKeys' => [
          'shape' => 'TagKeyList',
        ],
      ],
    ],
    'ChangeTagsForResourceResponse' => [
      'type' => 'structure',
      'members' => [
      ],
    ],
    'Changes' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Change',
        'locationName' => 'Change',
      ],
      'min' => 1,
    ],
    'CheckerIpRanges' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IPAddressCidr',
      ],
    ],
    'ConflictingDomainExists' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'CreateHealthCheckRequest' => [
      'type' => 'structure',
      'required' => [
        'CallerReference',
        'HealthCheckConfig',
      ],
      'members' => [
        'CallerReference' => [
          'shape' => 'HealthCheckNonce',
        ],
        'HealthCheckConfig' => [
          'shape' => 'HealthCheckConfig',
        ],
      ],
    ],
    'CreateHealthCheckResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthCheck',
        'Location',
      ],
      'members' => [
        'HealthCheck' => [
          'shape' => 'HealthCheck',
        ],
        'Location' => [
          'shape' => 'ResourceURI',
          'location' => 'header',
          'locationName' => 'Location',
        ],
      ],
    ],
    'CreateHostedZoneRequest' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'CallerReference',
      ],
      'members' => [
        'Name' => [
          'shape' => 'DNSName',
        ],
        'VPC' => [
          'shape' => 'VPC',
        ],
        'CallerReference' => [
          'shape' => 'Nonce',
        ],
        'HostedZoneConfig' => [
          'shape' => 'HostedZoneConfig',
        ],
        'DelegationSetId' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'CreateHostedZoneResponse' => [
      'type' => 'structure',
      'required' => [
        'HostedZone',
        'ChangeInfo',
        'DelegationSet',
        'Location',
      ],
      'members' => [
        'HostedZone' => [
          'shape' => 'HostedZone',
        ],
        'ChangeInfo' => [
          'shape' => 'ChangeInfo',
        ],
        'DelegationSet' => [
          'shape' => 'DelegationSet',
        ],
        'VPC' => [
          'shape' => 'VPC',
        ],
        'Location' => [
          'shape' => 'ResourceURI',
          'location' => 'header',
          'locationName' => 'Location',
        ],
      ],
    ],
    'CreateReusableDelegationSetRequest' => [
      'type' => 'structure',
      'required' => [
        'CallerReference',
      ],
      'members' => [
        'CallerReference' => [
          'shape' => 'Nonce',
        ],
        'HostedZoneId' => [
          'shape' => 'ResourceId',
        ],
      ],
    ],
    'CreateReusableDelegationSetResponse' => [
      'type' => 'structure',
      'required' => [
        'DelegationSet',
        'Location',
      ],
      'members' => [
        'DelegationSet' => [
          'shape' => 'DelegationSet',
        ],
        'Location' => [
          'shape' => 'ResourceURI',
          'location' => 'header',
          'locationName' => 'Location',
        ],
      ],
    ],
    'DNSName' => [
      'type' => 'string',
      'max' => 1024,
    ],
    'DelegationSet' => [
      'type' => 'structure',
      'required' => [
        'NameServers',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
        ],
        'CallerReference' => [
          'shape' => 'Nonce',
        ],
        'NameServers' => [
          'shape' => 'DelegationSetNameServers',
        ],
      ],
    ],
    'DelegationSetAlreadyCreated' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DelegationSetAlreadyReusable' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DelegationSetInUse' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DelegationSetNameServers' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DNSName',
        'locationName' => 'NameServer',
      ],
      'min' => 1,
    ],
    'DelegationSetNotAvailable' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DelegationSetNotReusable' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DelegationSets' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DelegationSet',
        'locationName' => 'DelegationSet',
      ],
    ],
    'DeleteHealthCheckRequest' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckId',
      ],
      'members' => [
        'HealthCheckId' => [
          'shape' => 'HealthCheckId',
          'location' => 'uri',
          'locationName' => 'HealthCheckId',
        ],
      ],
    ],
    'DeleteHealthCheckResponse' => [
      'type' => 'structure',
      'members' => [
      ],
    ],
    'DeleteHostedZoneRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'DeleteHostedZoneResponse' => [
      'type' => 'structure',
      'required' => [
        'ChangeInfo',
      ],
      'members' => [
        'ChangeInfo' => [
          'shape' => 'ChangeInfo',
        ],
      ],
    ],
    'DeleteReusableDelegationSetRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'DeleteReusableDelegationSetResponse' => [
      'type' => 'structure',
      'members' => [
      ],
    ],
    'DisassociateVPCComment' => [
      'type' => 'string',
    ],
    'DisassociateVPCFromHostedZoneRequest' => [
      'type' => 'structure',
      'required' => [
        'HostedZoneId',
        'VPC',
      ],
      'members' => [
        'HostedZoneId' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'VPC' => [
          'shape' => 'VPC',
        ],
        'Comment' => [
          'shape' => 'DisassociateVPCComment',
        ],
      ],
    ],
    'DisassociateVPCFromHostedZoneResponse' => [
      'type' => 'structure',
      'required' => [
        'ChangeInfo',
      ],
      'members' => [
        'ChangeInfo' => [
          'shape' => 'ChangeInfo',
        ],
      ],
    ],
    'ErrorMessage' => [
      'type' => 'string',
    ],
    'ErrorMessages' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ErrorMessage',
        'locationName' => 'Message',
      ],
    ],
    'FailureThreshold' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10,
    ],
    'FullyQualifiedDomainName' => [
      'type' => 'string',
      'max' => 255,
    ],
    'GeoLocation' => [
      'type' => 'structure',
      'members' => [
        'ContinentCode' => [
          'shape' => 'GeoLocationContinentCode',
        ],
        'CountryCode' => [
          'shape' => 'GeoLocationCountryCode',
        ],
        'SubdivisionCode' => [
          'shape' => 'GeoLocationSubdivisionCode',
        ],
      ],
    ],
    'GeoLocationContinentCode' => [
      'type' => 'string',
      'min' => 2,
      'max' => 2,
    ],
    'GeoLocationContinentName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 32,
    ],
    'GeoLocationCountryCode' => [
      'type' => 'string',
      'min' => 1,
      'max' => 2,
    ],
    'GeoLocationCountryName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
    ],
    'GeoLocationDetails' => [
      'type' => 'structure',
      'members' => [
        'ContinentCode' => [
          'shape' => 'GeoLocationContinentCode',
        ],
        'ContinentName' => [
          'shape' => 'GeoLocationContinentName',
        ],
        'CountryCode' => [
          'shape' => 'GeoLocationCountryCode',
        ],
        'CountryName' => [
          'shape' => 'GeoLocationCountryName',
        ],
        'SubdivisionCode' => [
          'shape' => 'GeoLocationSubdivisionCode',
        ],
        'SubdivisionName' => [
          'shape' => 'GeoLocationSubdivisionName',
        ],
      ],
    ],
    'GeoLocationDetailsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GeoLocationDetails',
        'locationName' => 'GeoLocationDetails',
      ],
    ],
    'GeoLocationSubdivisionCode' => [
      'type' => 'string',
      'min' => 1,
      'max' => 3,
    ],
    'GeoLocationSubdivisionName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
    ],
    'GetChangeRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'GetChangeResponse' => [
      'type' => 'structure',
      'required' => [
        'ChangeInfo',
      ],
      'members' => [
        'ChangeInfo' => [
          'shape' => 'ChangeInfo',
        ],
      ],
    ],
    'GetCheckerIpRangesRequest' => [
      'type' => 'structure',
      'members' => [
      ],
    ],
    'GetCheckerIpRangesResponse' => [
      'type' => 'structure',
      'required' => [
        'CheckerIpRanges',
      ],
      'members' => [
        'CheckerIpRanges' => [
          'shape' => 'CheckerIpRanges',
        ],
      ],
    ],
    'GetGeoLocationRequest' => [
      'type' => 'structure',
      'members' => [
        'ContinentCode' => [
          'shape' => 'GeoLocationContinentCode',
          'location' => 'querystring',
          'locationName' => 'continentcode',
        ],
        'CountryCode' => [
          'shape' => 'GeoLocationCountryCode',
          'location' => 'querystring',
          'locationName' => 'countrycode',
        ],
        'SubdivisionCode' => [
          'shape' => 'GeoLocationSubdivisionCode',
          'location' => 'querystring',
          'locationName' => 'subdivisioncode',
        ],
      ],
    ],
    'GetGeoLocationResponse' => [
      'type' => 'structure',
      'required' => [
        'GeoLocationDetails',
      ],
      'members' => [
        'GeoLocationDetails' => [
          'shape' => 'GeoLocationDetails',
        ],
      ],
    ],
    'GetHealthCheckCountRequest' => [
      'type' => 'structure',
      'members' => [
      ],
    ],
    'GetHealthCheckCountResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckCount',
      ],
      'members' => [
        'HealthCheckCount' => [
          'shape' => 'HealthCheckCount',
        ],
      ],
    ],
    'GetHealthCheckLastFailureReasonRequest' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckId',
      ],
      'members' => [
        'HealthCheckId' => [
          'shape' => 'HealthCheckId',
          'location' => 'uri',
          'locationName' => 'HealthCheckId',
        ],
      ],
    ],
    'GetHealthCheckLastFailureReasonResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckObservations',
      ],
      'members' => [
        'HealthCheckObservations' => [
          'shape' => 'HealthCheckObservations',
        ],
      ],
    ],
    'GetHealthCheckRequest' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckId',
      ],
      'members' => [
        'HealthCheckId' => [
          'shape' => 'HealthCheckId',
          'location' => 'uri',
          'locationName' => 'HealthCheckId',
        ],
      ],
    ],
    'GetHealthCheckResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthCheck',
      ],
      'members' => [
        'HealthCheck' => [
          'shape' => 'HealthCheck',
        ],
      ],
    ],
    'GetHealthCheckStatusRequest' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckId',
      ],
      'members' => [
        'HealthCheckId' => [
          'shape' => 'HealthCheckId',
          'location' => 'uri',
          'locationName' => 'HealthCheckId',
        ],
      ],
    ],
    'GetHealthCheckStatusResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckObservations',
      ],
      'members' => [
        'HealthCheckObservations' => [
          'shape' => 'HealthCheckObservations',
        ],
      ],
    ],
    'GetHostedZoneRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'GetHostedZoneResponse' => [
      'type' => 'structure',
      'required' => [
        'HostedZone',
      ],
      'members' => [
        'HostedZone' => [
          'shape' => 'HostedZone',
        ],
        'DelegationSet' => [
          'shape' => 'DelegationSet',
        ],
        'VPCs' => [
          'shape' => 'VPCs',
        ],
      ],
    ],
    'GetReusableDelegationSetRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'GetReusableDelegationSetResponse' => [
      'type' => 'structure',
      'required' => [
        'DelegationSet',
      ],
      'members' => [
        'DelegationSet' => [
          'shape' => 'DelegationSet',
        ],
      ],
    ],
    'HealthCheck' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'CallerReference',
        'HealthCheckConfig',
        'HealthCheckVersion',
      ],
      'members' => [
        'Id' => [
          'shape' => 'HealthCheckId',
        ],
        'CallerReference' => [
          'shape' => 'HealthCheckNonce',
        ],
        'HealthCheckConfig' => [
          'shape' => 'HealthCheckConfig',
        ],
        'HealthCheckVersion' => [
          'shape' => 'HealthCheckVersion',
        ],
      ],
    ],
    'HealthCheckAlreadyExists' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'HealthCheckConfig' => [
      'type' => 'structure',
      'required' => [
        'Type',
      ],
      'members' => [
        'IPAddress' => [
          'shape' => 'IPAddress',
        ],
        'Port' => [
          'shape' => 'Port',
        ],
        'Type' => [
          'shape' => 'HealthCheckType',
        ],
        'ResourcePath' => [
          'shape' => 'ResourcePath',
        ],
        'FullyQualifiedDomainName' => [
          'shape' => 'FullyQualifiedDomainName',
        ],
        'SearchString' => [
          'shape' => 'SearchString',
        ],
        'RequestInterval' => [
          'shape' => 'RequestInterval',
        ],
        'FailureThreshold' => [
          'shape' => 'FailureThreshold',
        ],
      ],
    ],
    'HealthCheckCount' => [
      'type' => 'long',
    ],
    'HealthCheckId' => [
      'type' => 'string',
      'max' => 64,
    ],
    'HealthCheckInUse' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'HealthCheckNonce' => [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
    ],
    'HealthCheckObservation' => [
      'type' => 'structure',
      'members' => [
        'IPAddress' => [
          'shape' => 'IPAddress',
        ],
        'StatusReport' => [
          'shape' => 'StatusReport',
        ],
      ],
    ],
    'HealthCheckObservations' => [
      'type' => 'list',
      'member' => [
        'shape' => 'HealthCheckObservation',
        'locationName' => 'HealthCheckObservation',
      ],
    ],
    'HealthCheckType' => [
      'type' => 'string',
      'enum' => [
        'HTTP',
        'HTTPS',
        'HTTP_STR_MATCH',
        'HTTPS_STR_MATCH',
        'TCP',
      ],
    ],
    'HealthCheckVersion' => [
      'type' => 'long',
      'min' => 1,
    ],
    'HealthCheckVersionMismatch' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'HealthChecks' => [
      'type' => 'list',
      'member' => [
        'shape' => 'HealthCheck',
        'locationName' => 'HealthCheck',
      ],
    ],
    'HostedZone' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Name',
        'CallerReference',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
        ],
        'Name' => [
          'shape' => 'DNSName',
        ],
        'CallerReference' => [
          'shape' => 'Nonce',
        ],
        'Config' => [
          'shape' => 'HostedZoneConfig',
        ],
        'ResourceRecordSetCount' => [
          'shape' => 'HostedZoneRRSetCount',
        ],
      ],
    ],
    'HostedZoneAlreadyExists' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'HostedZoneConfig' => [
      'type' => 'structure',
      'members' => [
        'Comment' => [
          'shape' => 'ResourceDescription',
        ],
        'PrivateZone' => [
          'shape' => 'IsPrivateZone',
        ],
      ],
    ],
    'HostedZoneNotEmpty' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'HostedZoneNotFound' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'HostedZoneRRSetCount' => [
      'type' => 'long',
    ],
    'HostedZones' => [
      'type' => 'list',
      'member' => [
        'shape' => 'HostedZone',
        'locationName' => 'HostedZone',
      ],
    ],
    'IPAddress' => [
      'type' => 'string',
      'max' => 15,
      'pattern' => '^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]]\\.]{3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]]$',
    ],
    'IPAddressCidr' => [
      'type' => 'string',
    ],
    'IncompatibleVersion' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidArgument' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'InvalidChangeBatch' => [
      'type' => 'structure',
      'members' => [
        'messages' => [
          'shape' => 'ErrorMessages',
        ],
      ],
      'exception' => true,
    ],
    'InvalidDomainName' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidInput' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidVPCId' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'IsPrivateZone' => [
      'type' => 'boolean',
    ],
    'LastVPCAssociation' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'LimitsExceeded' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'ListGeoLocationsRequest' => [
      'type' => 'structure',
      'members' => [
        'StartContinentCode' => [
          'shape' => 'GeoLocationContinentCode',
          'location' => 'querystring',
          'locationName' => 'startcontinentcode',
        ],
        'StartCountryCode' => [
          'shape' => 'GeoLocationCountryCode',
          'location' => 'querystring',
          'locationName' => 'startcountrycode',
        ],
        'StartSubdivisionCode' => [
          'shape' => 'GeoLocationSubdivisionCode',
          'location' => 'querystring',
          'locationName' => 'startsubdivisioncode',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
          'location' => 'querystring',
          'locationName' => 'maxitems',
        ],
      ],
    ],
    'ListGeoLocationsResponse' => [
      'type' => 'structure',
      'required' => [
        'GeoLocationDetailsList',
        'IsTruncated',
        'MaxItems',
      ],
      'members' => [
        'GeoLocationDetailsList' => [
          'shape' => 'GeoLocationDetailsList',
        ],
        'IsTruncated' => [
          'shape' => 'PageTruncated',
        ],
        'NextContinentCode' => [
          'shape' => 'GeoLocationContinentCode',
        ],
        'NextCountryCode' => [
          'shape' => 'GeoLocationCountryCode',
        ],
        'NextSubdivisionCode' => [
          'shape' => 'GeoLocationSubdivisionCode',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
        ],
      ],
    ],
    'ListHealthChecksRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'PageMarker',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
          'location' => 'querystring',
          'locationName' => 'maxitems',
        ],
      ],
    ],
    'ListHealthChecksResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthChecks',
        'Marker',
        'IsTruncated',
        'MaxItems',
      ],
      'members' => [
        'HealthChecks' => [
          'shape' => 'HealthChecks',
        ],
        'Marker' => [
          'shape' => 'PageMarker',
        ],
        'IsTruncated' => [
          'shape' => 'PageTruncated',
        ],
        'NextMarker' => [
          'shape' => 'PageMarker',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
        ],
      ],
    ],
    'ListHostedZonesRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'PageMarker',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
          'location' => 'querystring',
          'locationName' => 'maxitems',
        ],
        'DelegationSetId' => [
          'shape' => 'ResourceId',
          'location' => 'querystring',
          'locationName' => 'delegationsetid',
        ],
      ],
    ],
    'ListHostedZonesResponse' => [
      'type' => 'structure',
      'required' => [
        'HostedZones',
        'Marker',
        'IsTruncated',
        'MaxItems',
      ],
      'members' => [
        'HostedZones' => [
          'shape' => 'HostedZones',
        ],
        'Marker' => [
          'shape' => 'PageMarker',
        ],
        'IsTruncated' => [
          'shape' => 'PageTruncated',
        ],
        'NextMarker' => [
          'shape' => 'PageMarker',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
        ],
      ],
    ],
    'ListResourceRecordSetsRequest' => [
      'type' => 'structure',
      'required' => [
        'HostedZoneId',
      ],
      'members' => [
        'HostedZoneId' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'StartRecordName' => [
          'shape' => 'DNSName',
          'location' => 'querystring',
          'locationName' => 'name',
        ],
        'StartRecordType' => [
          'shape' => 'RRType',
          'location' => 'querystring',
          'locationName' => 'type',
        ],
        'StartRecordIdentifier' => [
          'shape' => 'ResourceRecordSetIdentifier',
          'location' => 'querystring',
          'locationName' => 'identifier',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
          'location' => 'querystring',
          'locationName' => 'maxitems',
        ],
      ],
    ],
    'ListResourceRecordSetsResponse' => [
      'type' => 'structure',
      'required' => [
        'ResourceRecordSets',
        'IsTruncated',
        'MaxItems',
      ],
      'members' => [
        'ResourceRecordSets' => [
          'shape' => 'ResourceRecordSets',
        ],
        'IsTruncated' => [
          'shape' => 'PageTruncated',
        ],
        'NextRecordName' => [
          'shape' => 'DNSName',
        ],
        'NextRecordType' => [
          'shape' => 'RRType',
        ],
        'NextRecordIdentifier' => [
          'shape' => 'ResourceRecordSetIdentifier',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
        ],
      ],
    ],
    'ListReusableDelegationSetsRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'PageMarker',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
          'location' => 'querystring',
          'locationName' => 'maxitems',
        ],
      ],
    ],
    'ListReusableDelegationSetsResponse' => [
      'type' => 'structure',
      'required' => [
        'DelegationSets',
        'Marker',
        'IsTruncated',
        'MaxItems',
      ],
      'members' => [
        'DelegationSets' => [
          'shape' => 'DelegationSets',
        ],
        'Marker' => [
          'shape' => 'PageMarker',
        ],
        'IsTruncated' => [
          'shape' => 'PageTruncated',
        ],
        'NextMarker' => [
          'shape' => 'PageMarker',
        ],
        'MaxItems' => [
          'shape' => 'PageMaxItems',
        ],
      ],
    ],
    'ListTagsForResourceRequest' => [
      'type' => 'structure',
      'required' => [
        'ResourceType',
        'ResourceId',
      ],
      'members' => [
        'ResourceType' => [
          'shape' => 'TagResourceType',
          'location' => 'uri',
          'locationName' => 'ResourceType',
        ],
        'ResourceId' => [
          'shape' => 'TagResourceId',
          'location' => 'uri',
          'locationName' => 'ResourceId',
        ],
      ],
    ],
    'ListTagsForResourceResponse' => [
      'type' => 'structure',
      'required' => [
        'ResourceTagSet',
      ],
      'members' => [
        'ResourceTagSet' => [
          'shape' => 'ResourceTagSet',
        ],
      ],
    ],
    'ListTagsForResourcesRequest' => [
      'type' => 'structure',
      'required' => [
        'ResourceType',
        'ResourceIds',
      ],
      'members' => [
        'ResourceType' => [
          'shape' => 'TagResourceType',
          'location' => 'uri',
          'locationName' => 'ResourceType',
        ],
        'ResourceIds' => [
          'shape' => 'TagResourceIdList',
        ],
      ],
    ],
    'ListTagsForResourcesResponse' => [
      'type' => 'structure',
      'required' => [
        'ResourceTagSets',
      ],
      'members' => [
        'ResourceTagSets' => [
          'shape' => 'ResourceTagSetList',
        ],
      ],
    ],
    'NoSuchChange' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchDelegationSet' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'NoSuchGeoLocation' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchHealthCheck' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchHostedZone' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'Nonce' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
    ],
    'PageMarker' => [
      'type' => 'string',
      'max' => 64,
    ],
    'PageMaxItems' => [
      'type' => 'string',
    ],
    'PageTruncated' => [
      'type' => 'boolean',
    ],
    'Port' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 65535,
    ],
    'PriorRequestNotComplete' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'PublicZoneVPCAssociation' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'RData' => [
      'type' => 'string',
      'max' => 4000,
    ],
    'RRType' => [
      'type' => 'string',
      'enum' => [
        'SOA',
        'A',
        'TXT',
        'NS',
        'CNAME',
        'MX',
        'PTR',
        'SRV',
        'SPF',
        'AAAA',
      ],
    ],
    'RequestInterval' => [
      'type' => 'integer',
      'min' => 10,
      'max' => 30,
    ],
    'ResourceDescription' => [
      'type' => 'string',
      'max' => 256,
    ],
    'ResourceId' => [
      'type' => 'string',
      'max' => 32,
    ],
    'ResourcePath' => [
      'type' => 'string',
      'max' => 255,
    ],
    'ResourceRecord' => [
      'type' => 'structure',
      'required' => [
        'Value',
      ],
      'members' => [
        'Value' => [
          'shape' => 'RData',
        ],
      ],
    ],
    'ResourceRecordSet' => [
      'type' => 'structure',
      'required' => [
        'Name',
        'Type',
      ],
      'members' => [
        'Name' => [
          'shape' => 'DNSName',
        ],
        'Type' => [
          'shape' => 'RRType',
        ],
        'SetIdentifier' => [
          'shape' => 'ResourceRecordSetIdentifier',
        ],
        'Weight' => [
          'shape' => 'ResourceRecordSetWeight',
        ],
        'Region' => [
          'shape' => 'ResourceRecordSetRegion',
        ],
        'GeoLocation' => [
          'shape' => 'GeoLocation',
        ],
        'Failover' => [
          'shape' => 'ResourceRecordSetFailover',
        ],
        'TTL' => [
          'shape' => 'TTL',
        ],
        'ResourceRecords' => [
          'shape' => 'ResourceRecords',
        ],
        'AliasTarget' => [
          'shape' => 'AliasTarget',
        ],
        'HealthCheckId' => [
          'shape' => 'HealthCheckId',
        ],
      ],
    ],
    'ResourceRecordSetFailover' => [
      'type' => 'string',
      'enum' => [
        'PRIMARY',
        'SECONDARY',
      ],
    ],
    'ResourceRecordSetIdentifier' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
    ],
    'ResourceRecordSetRegion' => [
      'type' => 'string',
      'enum' => [
        'us-east-1',
        'us-west-1',
        'us-west-2',
        'eu-west-1',
        'eu-central-1',
        'ap-southeast-1',
        'ap-southeast-2',
        'ap-northeast-1',
        'sa-east-1',
        'cn-north-1',
      ],
      'min' => 1,
      'max' => 64,
    ],
    'ResourceRecordSetWeight' => [
      'type' => 'long',
      'min' => 0,
      'max' => 255,
    ],
    'ResourceRecordSets' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ResourceRecordSet',
        'locationName' => 'ResourceRecordSet',
      ],
    ],
    'ResourceRecords' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ResourceRecord',
        'locationName' => 'ResourceRecord',
      ],
      'min' => 1,
    ],
    'ResourceTagSet' => [
      'type' => 'structure',
      'members' => [
        'ResourceType' => [
          'shape' => 'TagResourceType',
        ],
        'ResourceId' => [
          'shape' => 'TagResourceId',
        ],
        'Tags' => [
          'shape' => 'TagList',
        ],
      ],
    ],
    'ResourceTagSetList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ResourceTagSet',
        'locationName' => 'ResourceTagSet',
      ],
    ],
    'ResourceURI' => [
      'type' => 'string',
      'max' => 1024,
    ],
    'SearchString' => [
      'type' => 'string',
      'max' => 255,
    ],
    'Status' => [
      'type' => 'string',
    ],
    'StatusReport' => [
      'type' => 'structure',
      'members' => [
        'Status' => [
          'shape' => 'Status',
        ],
        'CheckedTime' => [
          'shape' => 'TimeStamp',
        ],
      ],
    ],
    'TTL' => [
      'type' => 'long',
      'min' => 0,
      'max' => 2147483647,
    ],
    'Tag' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'TagKey',
        ],
        'Value' => [
          'shape' => 'TagValue',
        ],
      ],
    ],
    'TagKey' => [
      'type' => 'string',
      'max' => 128,
    ],
    'TagKeyList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TagKey',
        'locationName' => 'Key',
      ],
      'min' => 1,
      'max' => 10,
    ],
    'TagList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tag',
        'locationName' => 'Tag',
      ],
      'min' => 1,
      'max' => 10,
    ],
    'TagResourceId' => [
      'type' => 'string',
      'max' => 64,
    ],
    'TagResourceIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TagResourceId',
        'locationName' => 'ResourceId',
      ],
      'min' => 1,
      'max' => 10,
    ],
    'TagResourceType' => [
      'type' => 'string',
      'enum' => [
        'healthcheck',
        'hostedzone',
      ],
    ],
    'TagValue' => [
      'type' => 'string',
      'max' => 256,
    ],
    'ThrottlingException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TimeStamp' => [
      'type' => 'timestamp',
    ],
    'TooManyHealthChecks' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'TooManyHostedZones' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'UpdateHealthCheckRequest' => [
      'type' => 'structure',
      'required' => [
        'HealthCheckId',
      ],
      'members' => [
        'HealthCheckId' => [
          'shape' => 'HealthCheckId',
          'location' => 'uri',
          'locationName' => 'HealthCheckId',
        ],
        'HealthCheckVersion' => [
          'shape' => 'HealthCheckVersion',
        ],
        'IPAddress' => [
          'shape' => 'IPAddress',
        ],
        'Port' => [
          'shape' => 'Port',
        ],
        'ResourcePath' => [
          'shape' => 'ResourcePath',
        ],
        'FullyQualifiedDomainName' => [
          'shape' => 'FullyQualifiedDomainName',
        ],
        'SearchString' => [
          'shape' => 'SearchString',
        ],
        'FailureThreshold' => [
          'shape' => 'FailureThreshold',
        ],
      ],
    ],
    'UpdateHealthCheckResponse' => [
      'type' => 'structure',
      'required' => [
        'HealthCheck',
      ],
      'members' => [
        'HealthCheck' => [
          'shape' => 'HealthCheck',
        ],
      ],
    ],
    'UpdateHostedZoneCommentRequest' => [
      'type' => 'structure',
      'required' => [
        'Id',
      ],
      'members' => [
        'Id' => [
          'shape' => 'ResourceId',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'Comment' => [
          'shape' => 'ResourceDescription',
        ],
      ],
    ],
    'UpdateHostedZoneCommentResponse' => [
      'type' => 'structure',
      'required' => [
        'HostedZone',
      ],
      'members' => [
        'HostedZone' => [
          'shape' => 'HostedZone',
        ],
      ],
    ],
    'VPC' => [
      'type' => 'structure',
      'members' => [
        'VPCRegion' => [
          'shape' => 'VPCRegion',
        ],
        'VPCId' => [
          'shape' => 'VPCId',
        ],
      ],
    ],
    'VPCAssociationNotFound' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'VPCId' => [
      'type' => 'string',
      'max' => 1024,
    ],
    'VPCRegion' => [
      'type' => 'string',
      'enum' => [
        'us-east-1',
        'us-west-1',
        'us-west-2',
        'eu-west-1',
        'eu-central-1',
        'ap-southeast-1',
        'ap-southeast-2',
        'ap-northeast-1',
        'sa-east-1',
        'cn-north-1',
      ],
      'min' => 1,
      'max' => 64,
    ],
    'VPCs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VPC',
        'locationName' => 'VPC',
      ],
      'min' => 1,
    ],
  ],
];
