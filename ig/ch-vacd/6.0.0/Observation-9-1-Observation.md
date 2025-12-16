# 9.1 Observation (Labor and Serology) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **9.1 Observation (Labor and Serology)**

## Example Observation: 9.1 Observation (Labor and Serology)

Profile: [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md)

**Author of the content**: [PractitionerRole](PractitionerRole-6-1-PractitionerRole.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e12a5c59-8785-4ecc-90f5-39b39bced95f

**status**: Final

**code**: Hepatitis B virus surface Ab [Units/volume] in Serum

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**effective**: 1971-10

**performer**: [PractitionerRole](PractitionerRole-6-1-PractitionerRole.md)

**value**: 99 [iU]/L(Details: UCUM code[iU]/L = '[iU]/L')

**interpretation**: Positive



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "9-1-Observation",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/6-1-PractitionerRole"
      }
    },
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
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:e12a5c59-8785-4ecc-90f5-39b39bced95f"
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
    "reference" : "Patient/3-1-Patient"
  },
  "effectiveDateTime" : "1971-10",
  "performer" : [
    {
      "reference" : "PractitionerRole/6-1-PractitionerRole"
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
