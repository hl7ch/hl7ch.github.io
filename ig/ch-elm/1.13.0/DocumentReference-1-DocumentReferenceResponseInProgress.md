# Publish Response for Neisseria Gonorhoeae in progress - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Publish Response for Neisseria Gonorhoeae in progress**

## Example DocumentReference: Publish Response for Neisseria Gonorhoeae in progress

version: 1; Last updated: 2023-10-10 13:30:18+0200

> **Status of the processing of the document**
* status: in-progress

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2e19d

**status**: Current

**date**: 2023-10-10 13:30:18+0200

> **content**

### Attachments

| | |
| :--- | :--- |
| - | **Url** |
| * | urn:uuid:1901332d-6012-443f-9690-9291adb2e19d |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "1-DocumentReferenceResponseInProgress",
  "meta" : {
    "versionId" : "1",
    "lastUpdated" : "2023-10-10T13:30:18.668+02:00"
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "status",
          "valueCode" : "in-progress"
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
