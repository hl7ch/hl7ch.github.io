# DocumentEntryClassCodeToDocumentEntryTypeCode - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntryClassCodeToDocumentEntryTypeCode**

## ConceptMap: DocumentEntryClassCodeToDocumentEntryTypeCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ConceptMap/DocumentEntryClassCodeToDocumentEntryTypeCode | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DocumentEntryClassCodeToDocumentEntryTypeCode |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Mapping DocumentEntryClassCodeToDocumentEntryTypeCode 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "DocumentEntryClassCodeToDocumentEntryTypeCode",
  "url" : "http://fhir.ch/ig/ch-term/ConceptMap/DocumentEntryClassCodeToDocumentEntryTypeCode",
  "version" : "3.3.0",
  "name" : "DocumentEntryClassCodeToDocumentEntryTypeCode",
  "title" : "DocumentEntryClassCodeToDocumentEntryTypeCode",
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
  "description" : "Mapping DocumentEntryClassCodeToDocumentEntryTypeCode",
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
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "sourceUri" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.classCode",
  "targetUri" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode",
  "group" : [
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "371531000",
          "display" : "Report of clinical encounter (record artifact)",
          "target" : [
            {
              "code" : "371530004",
              "display" : "Clinical consultation report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "371529009",
              "display" : "History and physical report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "371532007",
              "display" : "Progress report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "721927009",
          "display" : "Referral note (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "721963009",
          "display" : "Order (record artifact)",
          "target" : [
            {
              "code" : "721965002",
              "display" : "Laboratory order (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "721966001",
              "display" : "Pathology order (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "2161000195103",
              "display" : "Imaging order (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "422735006",
          "display" : "Summary clinical document (record artifact)",
          "target" : [
            {
              "code" : "373942005",
              "display" : "Discharge summary (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "371535009",
              "display" : "Transfer summary report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "721912009",
              "display" : "Medication summary document (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "736378000",
              "display" : "Medication management plan (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "371525003",
          "display" : "Clinical procedure report (record artifact)",
          "target" : [
            {
              "code" : "371526002",
              "display" : "Operative report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "4241000179101",
              "display" : "Laboratory report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "371528001",
              "display" : "Pathology report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "4201000179104",
              "display" : "Imaging report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "900000000000471006",
              "display" : "Image reference (foundation metadata concept)",
              "equivalence" : "specializes"
            },
            {
              "code" : "787148009",
              "display" : "Digital representation of specimen (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "734163000",
          "display" : "Care plan (record artifact)",
          "target" : [
            {
              "code" : "737427001",
              "display" : "Clinical management plan (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "773130005",
              "display" : "Nursing care plan (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "736055001",
              "display" : "Rehabilitation care plan (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "761931002",
              "display" : "Medication treatment plan report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "440545006",
          "display" : "Prescription record (record artifact)",
          "target" : [
            {
              "code" : "761938008",
              "display" : "Medicinal prescription record (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "765492005",
              "display" : "Non-drug prescription record (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "184216000",
          "display" : "Patient record type (record artifact)",
          "target" : [
            {
              "code" : "722446000",
              "display" : "Allergy record (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "41000179103",
              "display" : "Immunization record (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "371537001",
          "display" : "Consent report (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "371538006",
          "display" : "Advance directive report (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "722160009",
          "display" : "Audit trail report (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "722216001",
          "display" : "Emergency medical identification record (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "772790007",
          "display" : "Organ donor card (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "405624007",
          "display" : "Administrative documentation (record artifact)",
          "target" : [
            {
              "code" : "772786005",
              "display" : "Medical certificate (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "417319006",
          "display" : "Record of health event (record artifact)",
          "target" : [
            {
              "code" : "445300006",
              "display" : "Emergency department record (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "445418005",
              "display" : "Professional allied to medicine clinical report (record artifact)",
              "equivalence" : "specializes"
            },
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "417319006",
          "display" : "Record of health event (record artifact)",
          "target" : [
            {
              "code" : "82291000195104",
              "display" : "Medication dispense document (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "2171000195109",
          "display" : "Obstetrical record (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "419891008",
          "display" : "Record artifact (record artifact)",
          "target" : [
            {
              "code" : "419891008",
              "display" : "Record artifact (record artifact)",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    }
  ]
}

```
