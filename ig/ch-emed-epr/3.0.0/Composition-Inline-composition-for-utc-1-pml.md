# Composition: use case PML #1 - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Composition: use case PML #1**

## Example Composition: Composition: use case PML #1

Language: fr-CH

Profile: [PML Composition](StructureDefinition-ch-emed-epr-composition-medicationlist.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:87f151e3-9e67-48aa-8cfe-f816ae5fc084

**status**: Final

**type**: Medication summary document (record artifact)

**date**: 2023-10-01 00:00:00+0200

**author**: [Device: type = Pharmaceutical information system application software (physical object)](Bundle-BundleUtc1Pml.md#urn-uuid-f5090ee8-b8b1-4b1e-b529-b6d55fad08d4)

**title**: Liste de médication

**confidentiality**: normal

**custodian**: [Organization Association CARA](Bundle-BundleUtc1Pml.md#urn-uuid-dd9fd2e4-92d4-4a56-bda2-cf921e432eea)



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "Inline-composition-for-utc-1-pml",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist"
    ]
  },
  "language" : "fr-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:87f151e3-9e67-48aa-8cfe-f816ae5fc084"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "721912009",
        "display" : "Medication summary document (record artifact)"
      },
      {
        "system" : "http://loinc.org",
        "code" : "56445-0",
        "display" : "Medication summary Document"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "date" : "2023-10-01T00:00:00+02:00",
  "author" : [
    {
      "reference" : "urn:uuid:f5090ee8-b8b1-4b1e-b529-b6d55fad08d4"
    }
  ],
  "title" : "Liste de médication",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17621005",
              "display" : "Normal (qualifier value)"
            }
          ]
        }
      }
    ]
  },
  "custodian" : {
    "reference" : "urn:uuid:dd9fd2e4-92d4-4a56-bda2-cf921e432eea"
  },
  "section" : [
    {
      "title" : "Medication List",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "10160-0",
            "display" : "History of Medication use Narrative"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Cette liste de médication a été générée automatiquement par le service eMedication CARA le 1 octore 2023 à 00:00:00 CEST. Les paramètres utilisés pour la génération du document sont : les éléments de type Medication Treatment Plan Item, Prescription Item, Dispense Item et PADV sont inclus ; tous les traitements sont considérés.</div>"
      }
    }
  ]
}

```
