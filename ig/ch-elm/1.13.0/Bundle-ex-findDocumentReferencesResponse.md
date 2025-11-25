# Example of a Find Document References Response Message - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a Find Document References Response Message**

## Example Bundle: Example of a Find Document References Response Message

Bundle ex-findDocumentReferencesResponse of type searchset

-------

Entry 1 - fullUrl = http://test.fhir.net/R4/fhir/DocumentReference/1-DocumentReferenceResponseFailed

Resource DocumentReference:

> 

version: 2; Last updated: 2023-10-10 13:30:25+0200

> **Status of the processing of the document**
* status: failed
* outcome: [OperationOutcome (1 Error(s), 0 Warning(s))](#hcex-findDocumentReferencesResponse/1-DocumentReferenceResponseFailed/1-OperationOutcome)

**identifier**:[Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2e19d**status**: Current**date**: 2023-10-10 13:30:18+0200
> **content**

### Attachments

| | |
| :--- | :--- |
| - | **Url** |
| * | urn:uuid:1901332d-6012-443f-9690-9291adb2e19d |


-------

> 



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "ex-findDocumentReferencesResponse",
  "type" : "searchset",
  "timestamp" : "2023-10-10T14:30:18.668+02:00",
  "total" : 1,
  "link" : [
    {
      "relation" : "self",
      "url" : "http://test.fhir.net/R4/fhir/DocumentReference?_lastUpdate=gt2023-10-02T08:00:00+02:00&elm-status=failed"
    }
  ],
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.net/R4/fhir/DocumentReference/1-DocumentReferenceResponseFailed",
      "resource" : {
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
    }
  ]
}

```
