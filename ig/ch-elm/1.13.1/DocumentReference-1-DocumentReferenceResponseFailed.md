# Publish Response for Neisseria Gonorhoeae failed - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Publish Response for Neisseria Gonorhoeae failed**

## Example DocumentReference: Publish Response for Neisseria Gonorhoeae failed



## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "1-DocumentReferenceResponseFailed",
  "meta" : {
    "versionId" : "2",
    "lastUpdated" : "2023-10-10T13:30:25.00+02:00"
  },
  "contained" : [
    {
      "resourceType" : "OperationOutcome",
      "id" : "1-OperationOutcome",
      "issue" : [
        {
          "severity" : "error",
          "code" : "not-supported",
          "details" : {
            "text" : "unknown type of laboratory report"
          }
        }
      ]
    }
  ],
  "extension" : [
    {
      "extension" : [
        {
          "url" : "status",
          "valueCode" : "failed"
        },
        {
          "url" : "outcome",
          "valueReference" : {
            "reference" : "#1-OperationOutcome"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-ext-elm-status"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
    }
  ],
  "status" : "current",
  "date" : "2023-10-10T13:30:18.668+02:00",
  "content" : [
    {
      "attachment" : {
        "url" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
      }
    }
  ]
}

```
