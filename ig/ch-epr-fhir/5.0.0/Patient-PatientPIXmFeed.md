# PIXm Patient Feed - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Patient Feed**

## Example Patient: PIXm Patient Feed

Profile: [CH PIXm Patient Feed](StructureDefinition-ch-pixm-patient-feed.md)

Security Label: test health data (Details: ActReason code HTEST = 'test health data')

Franz Muster Male, DoB: 1995-01-27 ( Medical record number)

-------

| | |
| :--- | :--- |
| Other Id: | `urn:oid:2.16.756.5.30.1.127.3.10.3`/761337610000000002 |
| Alt. Name: | Muster |
| Links: | * Managing Organization: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:oid:2.999.1.2.3.4
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatientPIXmFeed",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-patient-feed"
    ],
    "security" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ActReason",
        "code" : "HTEST"
      }
    ]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "8734"
    },
    {
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
      "value" : "761337610000000002"
    }
  ],
  "name" : [
    {
      "family" : "Muster",
      "given" : ["Franz"]
    },
    {
      "family" : "Muster",
      "_family" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
            "valueCode" : "BR"
          }
        ]
      }
    }
  ],
  "gender" : "male",
  "birthDate" : "1995-01-27",
  "managingOrganization" : {
    "identifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.999.1.2.3.4"
    }
  }
}

```
