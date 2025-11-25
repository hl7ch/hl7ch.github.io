# CH ELM Laboratory Report - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Laboratory Report**

## Logical Model: CH ELM Laboratory Report 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/LaboratoryReport | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmLaboratoryReport |
| **Copyright/Legal**: CC0-1.0 | |

 
The logical model represents the CH ELM laboratory report as an abstract data model. These data elements are defined by the ordinance of the Federal Office of Public Health (FOPH) and are then mapped to the FHIR document structure. 
Cardinalities: 
* The cardinalities in the logical model show the so-called 'best case'. This means that if these data are available, they must be submitted to the FOPH.
* Since in reality the data is not always available, the CH ELM profiles define which elements are required or optional.
* See also the concept 'Must Support', which is described on the 'Home' page of this implementation guide
 

**Usages:**

* This Logical Model is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/LaboratoryReport)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-LaboratoryReport.csv), [Excel](StructureDefinition-LaboratoryReport.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "LaboratoryReport",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/LaboratoryReport",
  "version" : "1.13.0",
  "name" : "ChElmLaboratoryReport",
  "title" : "CH ELM Laboratory Report",
  "status" : "active",
  "date" : "2025-11-25T09:47:06+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "The logical model represents the CH ELM laboratory report as an abstract data model. These data elements are defined by the ordinance of the Federal Office of Public Health (FOPH) and are then mapped to the FHIR document structure. \n\nCardinalities:\n- The cardinalities in the logical model show the so-called 'best case'. This means that if these data are available, they must be submitted to the FOPH.\n- Since in reality the data is not always available, the CH ELM profiles define which elements are required or optional.\n- See also the concept 'Must Support', which is described on the 'Home' page of this implementation guide",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "ChElmLaboratoryReportToFhir",
      "uri" : "hl7.org/fhir/r4",
      "name" : "CH ELM Laboratory Report to FHIR"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://fhir.ch/ig/ch-elm/StructureDefinition/LaboratoryReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Element",
  "derivation" : "specialization",
  "differential" : {
    "element" : [
      {
        "id" : "LaboratoryReport",
        "path" : "LaboratoryReport",
        "short" : "Laborbericht basierend auf der SR 818.101.126 Verordnung des EDI über die Meldung von Beobachtungen übertragbarer Krankheiten des Menschen (https://www.fedlex.admin.ch/eli/cc/2015/892/de)",
        "definition" : "Laboratory Report",
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Header",
        "path" : "LaboratoryReport.Header",
        "short" : "Document information",
        "definition" : "Document information",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0]"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Header.DocumentIdentifier",
        "path" : "LaboratoryReport.Header.DocumentIdentifier",
        "short" : "Persistent, unique identifier for the document",
        "definition" : "Persistent, unique identifier for the document",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.identifier.where(system='urn:ietf:rfc:3986').value.substring(9)"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Header.DocumentTimestamp",
        "path" : "LaboratoryReport.Header.DocumentTimestamp",
        "short" : "Timestamp of the document",
        "definition" : "Timestamp of the document",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.date"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Header.DocumentLanguage",
        "path" : "LaboratoryReport.Header.DocumentLanguage",
        "short" : "Language of the document content",
        "definition" : "Language of the document content",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.language"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Header.DocumentTitle",
        "path" : "LaboratoryReport.Header.DocumentTitle",
        "short" : "Human Readable name/title of the document",
        "definition" : "Human Readable name/title of the document",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.title"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Header.DocumentSectionTitle",
        "path" : "LaboratoryReport.Header.DocumentSectionTitle",
        "short" : "Human Readable name/title of the section",
        "definition" : "Human Readable name/title of the section",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.title"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Author",
        "path" : "LaboratoryReport.Author",
        "short" : "Author of the document (may be identical with Lab)",
        "definition" : "Author of the document (may be identical with Lab)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.author.resolve()"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Author.OrganizationGLN",
        "path" : "LaboratoryReport.Author.OrganizationGLN",
        "short" : "Global location number (GLN) of the authoring/sending organization",
        "definition" : "Global location number (GLN) of the authoring/sending organization",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.author.resolve().identifier.where(system='urn:oid:2.51.1.3').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Lab",
        "path" : "LaboratoryReport.Lab",
        "short" : "Notifiable laboratory that performed the laboratory test -> Art. 4 Abs. 2 (Meldepflichtiges Laboratorium)",
        "definition" : "Notifiable laboratory that performed the laboratory test -> Art. 4 Abs. 2 (Meldepflichtiges Laboratorium)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).performer.resolve()"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Lab.OrganizationGLN",
        "path" : "LaboratoryReport.Lab.OrganizationGLN",
        "short" : "Global location number (GLN) of the laboratory organization",
        "definition" : "Global location number (GLN) of the laboratory organization",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).performer.resolve().identifier.where(system='urn:oid:2.51.1.3').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Lab.OrganizationName",
        "path" : "LaboratoryReport.Lab.OrganizationName",
        "short" : "Name of the laboratory organization",
        "definition" : "Name of the laboratory organization",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).performer.resolve().name"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Lab.OrderIdentifier",
        "path" : "LaboratoryReport.Lab.OrderIdentifier",
        "short" : "Identifier assigned to this order by the testing laboratory",
        "definition" : "Identifier assigned to this order by the testing laboratory",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().identifier"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer",
        "path" : "LaboratoryReport.Orderer",
        "short" : "Orderer of the laboratory test -> Art. 4 Abs. 3 (Auftraggebende Ärztin oder auftraggebender Arzt und Betrieb in dem sie oder er tätig ist)",
        "definition" : "Orderer of the laboratory test -> Art. 4 Abs. 3 (Auftraggebende Ärztin oder auftraggebender Arzt und Betrieb in dem sie oder er tätig ist)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve()"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationBER",
        "path" : "LaboratoryReport.Orderer.OrganizationBER",
        "short" : "Business and Enterprise Register (BER) of the ordering organization",
        "definition" : "Business and Enterprise Register (BER) of the ordering organization",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().identifier.where(system='urn:oid:2.16.756.5.45').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationUIDB",
        "path" : "LaboratoryReport.Orderer.OrganizationUIDB",
        "short" : "Unique Identification Business (UIDB) of the ordering organization",
        "definition" : "Unique Identification Business (UIDB) of the ordering organization",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().identifier.where(system='urn:oid:2.16.756.5.35').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationName",
        "path" : "LaboratoryReport.Orderer.OrganizationName",
        "short" : "Name of the ordering organization",
        "definition" : "Name of the ordering organization",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().name"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationDepartment",
        "path" : "LaboratoryReport.Orderer.OrganizationDepartment",
        "short" : "Department where the laboratory test is ordered",
        "definition" : "Department where the laboratory test is ordered",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().extension.where(url='http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician",
        "path" : "LaboratoryReport.Orderer.Physician",
        "short" : "Ordering physician",
        "definition" : "Ordering physician",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve()"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician.GLN",
        "path" : "LaboratoryReport.Orderer.Physician.GLN",
        "short" : "Global location number (GLN) of the physician",
        "definition" : "Global location number (GLN) of the physician",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve().identifier.where(system='urn:oid:2.51.1.3').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician.ZSR",
        "path" : "LaboratoryReport.Orderer.Physician.ZSR",
        "short" : "Unique Identification (ZSR/RCC) of the ordering physician",
        "definition" : "Unique Identification (ZSR/RCC) of the ordering physician",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve().identifier.where(system='urn:oid:2.16.756.5.30.1.123.100.2.1.1').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician.Surname",
        "path" : "LaboratoryReport.Orderer.Physician.Surname",
        "short" : "Surname physician",
        "definition" : "Surname physician",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve().name.family"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician.Givenname",
        "path" : "LaboratoryReport.Orderer.Physician.Givenname",
        "short" : "Given name physician",
        "definition" : "Given name physician",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve().name.given"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician.Phone",
        "path" : "LaboratoryReport.Orderer.Physician.Phone",
        "short" : "Phone number physician",
        "definition" : "Phone number physician",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve().telecom.where(system='phone').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.Physician.Email",
        "path" : "LaboratoryReport.Orderer.Physician.Email",
        "short" : "Email address physician",
        "definition" : "Email address physician",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().practitioner.resolve().telecom.where(system='email').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.PhysicianAddress",
        "path" : "LaboratoryReport.Orderer.PhysicianAddress",
        "short" : "Address of the ordering physician (optional, if different from organization address)",
        "definition" : "Address of the ordering physician (optional, if different from organization address)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.PhysicianAddress.StreetLine",
        "path" : "LaboratoryReport.Orderer.PhysicianAddress.StreetLine",
        "short" : "Street name, house number",
        "definition" : "Street name, house number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.PhysicianAddress.PostBox",
        "path" : "LaboratoryReport.Orderer.PhysicianAddress.PostBox",
        "short" : "P.O. Box number",
        "definition" : "P.O. Box number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.PhysicianAddress.ZipCode",
        "path" : "LaboratoryReport.Orderer.PhysicianAddress.ZipCode",
        "short" : "Zip code",
        "definition" : "Zip code",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.PhysicianAddress.City",
        "path" : "LaboratoryReport.Orderer.PhysicianAddress.City",
        "short" : "City",
        "definition" : "City",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationAddress",
        "path" : "LaboratoryReport.Orderer.OrganizationAddress",
        "short" : "Address of the ordering organization (default address)",
        "definition" : "Address of the ordering organization (default address)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().address"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationAddress.StreetLine",
        "path" : "LaboratoryReport.Orderer.OrganizationAddress.StreetLine",
        "short" : "Street name, house number",
        "definition" : "Street name, house number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().address.line.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName').value"
          },
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().address.line.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationAddress.PostBox",
        "path" : "LaboratoryReport.Orderer.OrganizationAddress.PostBox",
        "short" : "P.O. Box number",
        "definition" : "P.O. Box number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().address.line.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationAddress.ZipCode",
        "path" : "LaboratoryReport.Orderer.OrganizationAddress.ZipCode",
        "short" : "Zip code",
        "definition" : "Zip code",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().address.postalCode"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Orderer.OrganizationAddress.City",
        "path" : "LaboratoryReport.Orderer.OrganizationAddress.City",
        "short" : "City",
        "definition" : "City",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry.resource.as(DiagnosticReport).basedOn.resolve().requester.resolve().organization.resolve().address.city"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient",
        "path" : "LaboratoryReport.Patient",
        "short" : "Patient -> Anhang 3 (Angaben zur betroffenen Person)",
        "definition" : "Patient -> Anhang 3 (Angaben zur betroffenen Person)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve()"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Identifier",
        "path" : "LaboratoryReport.Patient.Identifier",
        "short" : "Identifier",
        "definition" : "Identifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().identifier"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Identifier.OASI",
        "path" : "LaboratoryReport.Patient.Identifier.OASI",
        "short" : "Switzerland: Old-age and survivors's insurance (OASI) number",
        "definition" : "Switzerland: Old-age and survivors's insurance (OASI) number",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().identifier.where(system='urn:oid:2.16.756.5.32').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Identifier.IDN",
        "path" : "LaboratoryReport.Patient.Identifier.IDN",
        "short" : "Liechtenstein: Identification number (IDN)",
        "definition" : "Liechtenstein: Identification number (IDN)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().identifier.where(system='urn:oid:2.16.438.10.20.10.10.1.2.1').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Surname",
        "path" : "LaboratoryReport.Patient.Surname",
        "short" : "Surname (or initials)",
        "definition" : "Surname (or initials)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().name.given"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Givenname",
        "path" : "LaboratoryReport.Patient.Givenname",
        "short" : "Given name (or initials)",
        "definition" : "Given name (or initials)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().name.family"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Gender",
        "path" : "LaboratoryReport.Patient.Gender",
        "short" : "Gender",
        "definition" : "Gender",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().gender"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.DateOfBirth",
        "path" : "LaboratoryReport.Patient.DateOfBirth",
        "short" : "Date of birth",
        "definition" : "Date of birth",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "date"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().birthDate"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Phone",
        "path" : "LaboratoryReport.Patient.Phone",
        "short" : "Phone number",
        "definition" : "Phone number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().telecom.where(system='phone').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Address",
        "path" : "LaboratoryReport.Patient.Address",
        "short" : "Residence address",
        "definition" : "Residence address",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home')"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Address.StreetLine",
        "path" : "LaboratoryReport.Patient.Address.StreetLine",
        "short" : "Street name, house number",
        "definition" : "Street name, house number",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home').line.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName').value"
          },
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home').line.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber').value"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Address.ZipCode",
        "path" : "LaboratoryReport.Patient.Address.ZipCode",
        "short" : "Zip code",
        "definition" : "Zip code",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home').postalCode"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Address.City",
        "path" : "LaboratoryReport.Patient.Address.City",
        "short" : "City",
        "definition" : "City",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home').city"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Address.Canton",
        "path" : "LaboratoryReport.Patient.Address.Canton",
        "short" : "Canton",
        "definition" : "Canton",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home').state"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.Patient.Address.Country",
        "path" : "LaboratoryReport.Patient.Address.Country",
        "short" : "Country",
        "definition" : "Country",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.subject.resolve().address.where(use='home').country.extension.where(url='http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding').value.code"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult",
        "path" : "LaboratoryReport.TestResult",
        "short" : "Laboratory result -> Art. 4 Abs. 1 (Die zu meldenden laboranalytischen Befunde) - Anhang 3 (Angaben zum laboranalytischen Befund)",
        "definition" : "Laboratory result -> Art. 4 Abs. 1 (Die zu meldenden laboranalytischen Befunde) - Anhang 3 (Angaben zum laboranalytischen Befund)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.StudyType",
        "path" : "LaboratoryReport.TestResult.StudyType",
        "short" : "Laboratory study type",
        "definition" : "Laboratory study type",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.code.coding.where(system='http://loinc.org')"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.ExecutionDateTime",
        "path" : "LaboratoryReport.TestResult.ExecutionDateTime",
        "short" : "Date (-time) of test",
        "definition" : "Date (-time) of test",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().effective"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Type",
        "path" : "LaboratoryReport.TestResult.Type",
        "short" : "Type of test",
        "definition" : "Type of test",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().code.coding.where(system='http://loinc.org')"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Type.Code",
        "path" : "LaboratoryReport.TestResult.Type.Code",
        "short" : "Coded data",
        "definition" : "Coded data",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().code.coding.where(system='http://loinc.org').code"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Type.CodeSystem",
        "path" : "LaboratoryReport.TestResult.Type.CodeSystem",
        "short" : "Identity fo the terminology system",
        "definition" : "Identity fo the terminology system",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "uri"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().code.coding.where(system='http://loinc.org').system"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Specimen",
        "path" : "LaboratoryReport.TestResult.Specimen",
        "short" : "Test sample",
        "definition" : "Test sample",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().specimen.resolve()"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Specimen.CollectionDateTime",
        "path" : "LaboratoryReport.TestResult.Specimen.CollectionDateTime",
        "short" : "Date (-time) of sample collection",
        "definition" : "Date (-time) of sample collection",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().specimen.resolve().collection.collected"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Specimen.Type",
        "path" : "LaboratoryReport.TestResult.Specimen.Type",
        "short" : "Collection material",
        "definition" : "Collection material",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().specimen.resolve().type"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Specimen.Type.Code",
        "path" : "LaboratoryReport.TestResult.Specimen.Type.Code",
        "short" : "Coded data",
        "definition" : "Coded data",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().specimen.resolve().type.coding.where(system='http://snomed.info/sct').code"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Specimen.Type.CodeSystem",
        "path" : "LaboratoryReport.TestResult.Specimen.Type.CodeSystem",
        "short" : "Identity fo the terminology system",
        "definition" : "Identity fo the terminology system",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "uri"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().specimen.resolve().type.coding.where(system='http://snomed.info/sct').system"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Value",
        "path" : "LaboratoryReport.TestResult.Value",
        "short" : "Acutal test result",
        "definition" : "Acutal test result",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().value.coding.where(system='http://snomed.info/sct')"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Value.Code",
        "path" : "LaboratoryReport.TestResult.Value.Code",
        "short" : "Coded data",
        "definition" : "Coded data",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().value.coding.where(system='http://snomed.info/sct').code"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Value.CodeSystem",
        "path" : "LaboratoryReport.TestResult.Value.CodeSystem",
        "short" : "Identity fo the terminology system",
        "definition" : "Identity fo the terminology system",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "uri"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().value.coding.where(system='http://snomed.info/sct').system"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Interpretation",
        "path" : "LaboratoryReport.TestResult.Interpretation",
        "short" : "Interpretation of the test result",
        "definition" : "Interpretation of the test result",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Element"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().interpretation.coding.where(system='http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation')"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Interpretation.Code",
        "path" : "LaboratoryReport.TestResult.Interpretation.Code",
        "short" : "Coded data",
        "definition" : "Coded data",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().interpretation.coding.where(system='http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation').code"
          }
        ]
      },
      {
        "id" : "LaboratoryReport.TestResult.Interpretation.CodeSystem",
        "path" : "LaboratoryReport.TestResult.Interpretation.CodeSystem",
        "short" : "Identity fo the terminology system (HL7 ObservationInterpretation)",
        "definition" : "Identity fo the terminology system (HL7 ObservationInterpretation)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "uri"
          }
        ],
        "mapping" : [
          {
            "identity" : "ChElmLaboratoryReportToFhir",
            "map" : "Bundle.entry[0].resource.section.entry.resolve().interpretation.coding.where(system='http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation').system"
          }
        ]
      }
    ]
  }
}

```
