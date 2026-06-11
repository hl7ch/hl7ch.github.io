# 8.10 Condition (TravelInformation) - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8.10 Condition (TravelInformation)**

## Example Condition: 8.10 Condition (TravelInformation)

Profile: [CH VACD Travel Information](StructureDefinition-ch-vacd-travel-information.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.3.0/NamingSystem-uri.html)/urn:uuid:66794b4b-a850-4c50-bdba-445d194b069b

**code**: Traveling

**subject**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**onset**: 2026-04-11 00:00:00+0100 --> 2026-04-18 23:59:59+0100

### Evidences

| | |
| :--- | :--- |
| - | **Detail** |
| * | [Location Mein Traumziel](Location-8-10-Condition-Travel-Location.md) |



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "8-10-Condition",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-information"]
  },
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:66794b4b-a850-4c50-bdba-445d194b069b"
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "129018004",
      "display" : "Traveling"
    }]
  },
  "subject" : {
    "reference" : "Patient/3-2-Patient"
  },
  "onsetPeriod" : {
    "start" : "2026-04-11T00:00:00+01:00",
    "end" : "2026-04-18T23:59:59+01:00"
  },
  "evidence" : [{
    "detail" : [{
      "reference" : "Location/8-10-Condition-Travel-Location"
    }]
  }]
}

```
