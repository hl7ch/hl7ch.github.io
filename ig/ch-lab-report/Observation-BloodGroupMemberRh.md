# Blood Group Rh - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blood Group Rh**

## Example Observation: Blood Group Rh

Profile: [CH LAB-Report Observation Results: Single Test](StructureDefinition-ChLab-observation-single-test.md)

**identifier**: `http://example.org/Labor-Pipette/labvalues`/1304-03760-blood-group-Rh

**status**: Final

**category**: Laboratory, Blood banking and transfusion medicine (specialty) (qualifier value), Blood bank studies (set)

**code**: Rh Nom (Bld)

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Eva Erlenmeyer](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**value**: RhD positive (finding)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BloodGroupMemberRh",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Pipette/labvalues",
      "value" : "1304-03760-blood-group-Rh"
    }
  ],
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "421661004",
          "display" : "Blood banking and transfusion medicine (specialty) (qualifier value)"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://loinc.org",
          "code" : "18717-9",
          "display" : "Blood bank studies (set)"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "10331-7",
        "display" : "Rh [Type] in Blood"
      }
    ],
    "text" : "Rh Nom (Bld)"
  },
  "subject" : {
    "reference" : "urn:uuid:6b8a0365-5022-403b-a5a5-8d8680d701ef",
    "display" : "Hans Guggindieluft"
  },
  "effectiveDateTime" : "2024-04-23T11:24:26+01:00",
  "issued" : "2024-04-24T11:24:26+01:00",
  "performer" : [
    {
      "reference" : "urn:uuid:12328339-f7d6-4bb6-80e4-89fd03ce5052",
      "display" : "Eva Erlenmeyer"
    }
  ],
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "165747007",
        "display" : "RhD positive (finding)"
      }
    ]
  }
}

```
