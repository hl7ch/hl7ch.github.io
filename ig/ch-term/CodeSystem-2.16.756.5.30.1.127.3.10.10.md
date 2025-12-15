# ch-ehealth-codesystem-format - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-ehealth-codesystem-format**

## CodeSystem: ch-ehealth-codesystem-format 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.10 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEhealthCodesystemFormat |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Document format as per Annex; EPRO-FDHA. This unambiguous code defines the format of the XDS document. Together with the mimetype, this should provide the potential consumer with sufficient information as to whether they are in a position to process the document. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentEntryFormatCode](ValueSet-DocumentEntry.formatCode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.10",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.9--20241119162640"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2024-11-19T16:26:40+01:00"
      }
    }
  ],
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.10",
  "version" : "3.3.0",
  "name" : "ChEhealthCodesystemFormat",
  "title" : "ch-ehealth-codesystem-format",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Document format as per Annex; EPRO-FDHA.       \t\tThis unambiguous code defines the format of the XDS document. Together with the mimetype, this should provide the potential consumer with sufficient information as to whether they are in a position to process the document.",
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
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "urn:che:epr:EPR_Unstructured_Document",
      "display" : "Unstructured EPR document",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Unstrukturiertes EPD Dokument"
        },
        {
          "language" : "fr-CH",
          "value" : "Document DEP non structuré"
        },
        {
          "language" : "it-CH",
          "value" : "Documento CIP non strutturato"
        },
        {
          "language" : "en-US",
          "value" : "Unstructured EPR document"
        },
        {
          "language" : "rm-CH",
          "value" : "Document DEP betg structurà"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-vacd:immunization-administration:2022",
      "display" : "CH VACD Immunization Administration",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH VACD Immunization Administration"
        },
        {
          "language" : "de-CH",
          "value" : "CH VACD Immunization Administration"
        },
        {
          "language" : "fr-CH",
          "value" : "CH VACD Immunization Administration"
        },
        {
          "language" : "it-CH",
          "value" : "CH VACD Immunization Administration"
        },
        {
          "language" : "rm-CH",
          "value" : "CH VACD Immunization Administration"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-vacd:vaccination-record:2022",
      "display" : "CH VACD Vaccination Record",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH VACD Vaccination Record"
        },
        {
          "language" : "de-CH",
          "value" : "CH VACD Vaccination Record"
        },
        {
          "language" : "fr-CH",
          "value" : "CH VACD Vaccination Record"
        },
        {
          "language" : "it-CH",
          "value" : "CH VACD Vaccination Record"
        },
        {
          "language" : "rm-CH",
          "value" : "CH VACD Vaccination Record"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-emed:medication-card:2023",
      "display" : "CH EMED Medication Card document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH EMED Medication Card document"
        },
        {
          "language" : "de-CH",
          "value" : "CH EMED Medication Card document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH EMED Medication Card document"
        },
        {
          "language" : "it-CH",
          "value" : "CH EMED Medication Card document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH EMED Medication Card document"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-emed:mtp:2024",
      "display" : "CH EMED Medication Treatment Plan document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH EMED Medication Treatment Plan document"
        },
        {
          "language" : "de-CH",
          "value" : "CH EMED Medication Treatment Plan document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH EMED Medication Treatment Plan document"
        },
        {
          "language" : "it-CH",
          "value" : "CH EMED Medication Treatment Plan document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH EMED Medication Treatment Plan document"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-emed:pre:2024",
      "display" : "CH EMED Medication Prescription document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH EMED Medication Prescription document"
        },
        {
          "language" : "de-CH",
          "value" : "CH EMED Medication Prescription document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH EMED Medication Prescription document"
        },
        {
          "language" : "it-CH",
          "value" : "CH EMED Medication Prescription document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH EMED Medication Prescription document"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-emed:dis:2024",
      "display" : "CH EMED Medication Dispense document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH EMED Medication Dispense document"
        },
        {
          "language" : "de-CH",
          "value" : "CH EMED Medication Dispense document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH EMED Medication Dispense document"
        },
        {
          "language" : "it-CH",
          "value" : "CH EMED Medication Dispense document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH EMED Medication Dispense document"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-emed:padv:2024",
      "display" : "CH EMED Pharmaceutical Advice document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH EMED Pharmaceutical Advice document"
        },
        {
          "language" : "de-CH",
          "value" : "CH EMED Pharmaceutical Advice document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH EMED Pharmaceutical Advice document"
        },
        {
          "language" : "it-CH",
          "value" : "CH EMED Pharmaceutical Advice document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH EMED Pharmaceutical Advice document"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-emed:pml:2024",
      "display" : "CH EMED Medication List document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH EMED Medication List document"
        },
        {
          "language" : "de-CH",
          "value" : "CH EMED Medication List document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH EMED Medication List document"
        },
        {
          "language" : "it-CH",
          "value" : "CH EMED Medication List document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH EMED Medication List document"
        }
      ]
    },
    {
      "code" : "urn:che:epr:ch-allergyintolerance:2024",
      "display" : "CH AllergyIntolerance document",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "CH AllergyIntolerance document"
        },
        {
          "language" : "de-CH",
          "value" : "CH AllergyIntolerance document"
        },
        {
          "language" : "fr-CH",
          "value" : "CH AllergyIntolerance document"
        },
        {
          "language" : "it-CH",
          "value" : "CH AllergyIntolerance document"
        },
        {
          "language" : "rm-CH",
          "value" : "CH AllergyIntolerance document"
        }
      ]
    }
  ]
}

```
