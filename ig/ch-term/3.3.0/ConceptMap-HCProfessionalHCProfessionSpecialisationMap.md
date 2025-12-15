# HCProfessionalHCProfessionSpecialisationMap - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HCProfessionalHCProfessionSpecialisationMap**

## ConceptMap: HCProfessionalHCProfessionSpecialisationMap 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ConceptMap/HCProfessionalHCProfessionSpecialisationMap | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:HCProfessionalHCProfessionSpecialisationMap |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Mapping HCProfessionalHCProfessionSpecialisationMap 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "HCProfessionalHCProfessionSpecialisationMap",
  "url" : "http://fhir.ch/ig/ch-term/ConceptMap/HCProfessionalHCProfessionSpecialisationMap",
  "version" : "3.3.0",
  "name" : "HCProfessionalHCProfessionSpecialisationMap",
  "title" : "HCProfessionalHCProfessionSpecialisationMap",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
  "description" : "Mapping HCProfessionalHCProfessionSpecialisationMap",
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
  "sourceUri" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession",
  "targetUri" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation",
  "group" : [
    {
      "source" : "http://snomed.info/sct",
      "target" : "urn:oid:2.16.756.5.30.1.127.3.5",
      "element" : [
        {
          "code" : "46255001",
          "display" : "Pharmacist (occupation)",
          "target" : [
            {
              "code" : "1052",
              "display" : "Community pharmacy",
              "equivalence" : "specializes"
            },
            {
              "code" : "1053",
              "display" : "Hospital pharmacy",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "urn:oid:2.16.756.5.30.1.127.3.5",
      "element" : [
        {
          "code" : "309343006",
          "display" : "Physician (occupation)",
          "target" : [
            {
              "code" : "1002",
              "display" : "Surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1003",
              "display" : "Gynaecology and obstetrics",
              "equivalence" : "specializes"
            },
            {
              "code" : "1004",
              "display" : "Cardiac and thoracic vascular surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1006",
              "display" : "Paediatrics",
              "equivalence" : "specializes"
            },
            {
              "code" : "1007",
              "display" : "Ophthalmology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1008",
              "display" : "Otorhinolaryngology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1009",
              "display" : "Pathology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1012",
              "display" : "Anaesthesiology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1013",
              "display" : "Neurosurgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1014",
              "display" : "Neurology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1015",
              "display" : "Orthopaedic surgery and traumatology of the locomotor apparatus",
              "equivalence" : "specializes"
            },
            {
              "code" : "1016",
              "display" : "Pneumology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1017",
              "display" : "Psychiatry and psychotherapy",
              "equivalence" : "specializes"
            },
            {
              "code" : "1018",
              "display" : "Urology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1019",
              "display" : "Allergology and clinical immunology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1020",
              "display" : "Occupational medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1021",
              "display" : "Dermatology and venereology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1022",
              "display" : "Endocrinology – Diabetology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1023",
              "display" : "Gastroenterology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1024",
              "display" : "Haematology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1025",
              "display" : "Cardiology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1026",
              "display" : "Oral and maxillofacial surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1027",
              "display" : "Child and adolescent psychiatry and psychotherapy",
              "equivalence" : "specializes"
            },
            {
              "code" : "1028",
              "display" : "Paediatric surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1029",
              "display" : "Clinical pharmacology and toxicology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1030",
              "display" : "Radiology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1031",
              "display" : "Nuclear medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1032",
              "display" : "Radio-oncology / radiotherapy",
              "equivalence" : "specializes"
            },
            {
              "code" : "1033",
              "display" : "Nephrology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1034",
              "display" : "Physical medicine and rehabilitation",
              "equivalence" : "specializes"
            },
            {
              "code" : "1035",
              "display" : "Plastic, reconstructive and aesthetic surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1036",
              "display" : "Prevention and public health",
              "equivalence" : "specializes"
            },
            {
              "code" : "1037",
              "display" : "Rheumatology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1038",
              "display" : "Tropical and travel medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1039",
              "display" : "Infectology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1040",
              "display" : "General medical practitioner",
              "equivalence" : "specializes"
            },
            {
              "code" : "1041",
              "display" : "Angiology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1042",
              "display" : "Intensive care medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1043",
              "display" : "Medical genetics",
              "equivalence" : "specializes"
            },
            {
              "code" : "1044",
              "display" : "Medical oncology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1045",
              "display" : "Pharmaceutical medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1046",
              "display" : "Forensic medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1051",
              "display" : "General internal medicine",
              "equivalence" : "specializes"
            },
            {
              "code" : "1059",
              "display" : "Hand surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1060",
              "display" : "Vascular surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1061",
              "display" : "Thoracic surgery",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "urn:oid:2.16.756.5.30.1.127.3.5",
      "element" : [
        {
          "code" : "3842006",
          "display" : "Chiropractor (occupation)",
          "target" : [
            {
              "code" : "1011",
              "display" : "Chiropractic specialist",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "urn:oid:2.16.756.5.30.1.127.3.5",
      "element" : [
        {
          "code" : "59944000",
          "display" : "Psychologist (occupation)",
          "target" : [
            {
              "code" : "1054",
              "display" : "Psychotherapy",
              "equivalence" : "specializes"
            },
            {
              "code" : "1055",
              "display" : "Child and adolescent psychology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1056",
              "display" : "Clinical psychology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1057",
              "display" : "Neuropsychology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1058",
              "display" : "Health psychology",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "urn:oid:2.16.756.5.30.1.127.3.5",
      "element" : [
        {
          "code" : "106289002",
          "display" : "Dentist (occupation)",
          "target" : [
            {
              "code" : "1010",
              "display" : "Orthodontics",
              "equivalence" : "specializes"
            },
            {
              "code" : "1047",
              "display" : "Oral surgery",
              "equivalence" : "specializes"
            },
            {
              "code" : "1048",
              "display" : "Paradontology",
              "equivalence" : "specializes"
            },
            {
              "code" : "1049",
              "display" : "Reconstructive dentistry",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    }
  ]
}

```
