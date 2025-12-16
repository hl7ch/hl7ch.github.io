# 9.2 Observation (Labor and Serology for Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **9.2 Observation (Labor and Serology for Recommendation Request/Response)**

## Example Observation: 9.2 Observation (Labor and Serology for Recommendation Request/Response)

Profile: [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md)

**Author of the content**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:2c4d07e4-d978-4a1f-88de-440920f4913f

**status**: Final

**code**: Hepatitis B virus surface Ab [Units/volume] in Serum

**subject**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**effective**: 1971-10

**performer**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)

**value**: 99 [iU]/L(Details: UCUM code[iU]/L = '[iU]/L')

**interpretation**: Positive



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "9-2-Observation",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/6-4-PractitionerRole"
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
      "value" : "urn:uuid:2c4d07e4-d978-4a1f-88de-440920f4913f"
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
    "reference" : "Patient/3-2-Patient"
  },
  "effectiveDateTime" : "1971-10",
  "performer" : [
    {
      "reference" : "PractitionerRole/6-4-PractitionerRole"
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
