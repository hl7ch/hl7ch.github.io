# Endpoint Fulfiller - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Endpoint Fulfiller**

## Example Endpoint: Endpoint Fulfiller

**status**: Active

**connectionType**: [Endpoint Connection Type: hl7-fhir-rest](http://terminology.hl7.org/7.2.0/CodeSystem-endpoint-connection-type.html#endpoint-connection-type-hl7-fhir-rest) (HL7 FHIR)

**name**: Fulfiller FHIR API

**managingOrganization**: [http://registry.example.org/fhir/Organization/Fulfiller](http://registry.example.org/fhir/Organization/Fulfiller)

**payloadType**: Any

**address**: [https://fulfiller.example.org/fhir](https://fulfiller.example.org/fhir)



## Resource Content

```json
{
  "resourceType" : "Endpoint",
  "id" : "EndpointFulfiller",
  "status" : "active",
  "connectionType" : {
    "system" : "http://terminology.hl7.org/CodeSystem/endpoint-connection-type",
    "code" : "hl7-fhir-rest"
  },
  "name" : "Fulfiller FHIR API",
  "managingOrganization" : {
    "reference" : "http://registry.example.org/fhir/Organization/Fulfiller"
  },
  "payloadType" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/endpoint-payload-type",
      "code" : "any"
    }]
  }],
  "address" : "https://fulfiller.example.org/fhir"
}

```
