# Laboratory And Serology Labresult - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laboratory And Serology Labresult**

## Example Observation: Laboratory And Serology Labresult

Profile: [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/135f604f-f5c8-4e9b-a49b-5f34cdb9cf60

**status**: Final

**code**: Hepatitis B virus surface Ab [Units/volume] in Serum

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**effective**: 2021-10-01

**performer**: [Organization Labor Wir Messen Alles](Organization-TC-ORG3.md)

**value**: 99 [iU]/L(Details: UCUM code[iU]/L = '[iU]/L')

**interpretation**: Positive



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "TCB04-LABRES1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "59156000",
        "display" : "Confirmed"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "135f604f-f5c8-4e9b-a49b-5f34cdb9cf60"
    }
  ],
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "16935-9",
        "display" : "Hepatitis B virus surface Ab [Units/volume] in Serum"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "effectiveDateTime" : "2021-10-01",
  "performer" : [
    {
      "reference" : "Organization/TC-ORG3"
    }
  ],
  "valueQuantity" : {
    "value" : 99,
    "unit" : "[iU]/L",
    "system" : "http://unitsofmeasure.org",
    "code" : "[iU]/L"
  },
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "POS",
          "display" : "Positive"
        }
      ]
    }
  ]
}

```
