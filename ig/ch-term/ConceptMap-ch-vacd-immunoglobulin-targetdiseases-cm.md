# ImmunGlobuline To TargetDisease Mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ImmunGlobuline To TargetDisease Mapping**

## ConceptMap: ImmunGlobuline To TargetDisease Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-immunoglobulin-targetdiseases-cm | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ImmunGlobulineToTargetDiseaseMapping |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Mappings from ImmunGlobuline to TargetDisease according to the correcsponding valuesets 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-immunoglobulin-targetdiseases-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-immunoglobulin-targetdiseases-cm",
  "version" : "3.3.0",
  "name" : "ImmunGlobulineToTargetDiseaseMapping",
  "title" : "ImmunGlobuline To TargetDisease Mapping",
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
  "description" : "Mappings from ImmunGlobuline to TargetDisease according to the correcsponding valuesets",
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
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "group" : [
    {
      "source" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunoglobulin-cs",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "00687-01",
          "display" : "Berirab 2 ml, Injektionslösung",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00687-02",
          "display" : "Berirab 5 ml, Injektionslösung",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "69039-02",
          "display" : "Beyfortus 100 mg/1 ml, solution injectable en seringue préremplie",
          "target" : [
            {
              "code" : "55735004",
              "display" : "Respiratory syncytial virus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "69039-01",
          "display" : "Beyfortus 50 mg/0.5 ml, solution injectable en seringue préremplie",
          "target" : [
            {
              "code" : "55735004",
              "display" : "Respiratory syncytial virus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "68222-01",
          "display" : "Cutaquig 165 mg/ml, Injektionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "65992-01",
          "display" : "Cuvitru 200 mg/ml, Injektionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00506-02",
          "display" : "Cytotect CP Biotest, Infusionslösung",
          "target" : [
            {
              "code" : "28944009",
              "display" : "Infection caused by Cytomegalovirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00701-02",
          "display" : "Gammanorm, Injektionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "16318001000119107",
              "display" : "Hypogammaglobulinemia due to multiple myeloma (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00668-01",
          "display" : "Gamunex 10%, solution pour injection intraveineuse",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00488-02",
          "display" : "Hepatect CP, Infusionslösung",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00674-01",
          "display" : "Hepatitis-B-Immunglobulin Behring, Injektionslösung",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66410-01",
          "display" : "Hizentra 200mg/ml, Injektionslösung zur s.c. Anwendung, Fertigspritze",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61547-01",
          "display" : "Hizentra, Injektionslösung zur s.c. Anwendung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66684-01",
          "display" : "HyQvia 100 mg/ml, Infusionslösung zur subkutanen Anwendung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "58157-01",
          "display" : "Ig Vena Kedrion 50 g/I, solution pour infusion",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "62913-01",
          "display" : "Intratect 10%, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "57676-01",
          "display" : "Intratect 5%, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66332-03",
          "display" : "Iqymune 10g/100ml, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66332-04",
          "display" : "Iqymune 20g/200ml, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66332-01",
          "display" : "Iqymune 2g/20ml, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66332-02",
          "display" : "Iqymune 5g/50ml, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "57469-01",
          "display" : "Kiovig, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60323-01",
          "display" : "Octagam 10 %, Lösung zur intravenösen Anwendung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "58314-01",
          "display" : "Privigen, Infusionslösung",
          "target" : [
            {
              "code" : "58606001",
              "display" : "Primary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "33286000",
              "display" : "Secondary immune deficiency disorder (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53609-02",
          "display" : "Rhophylac 300, Injektionslösung",
          "target" : [
            {
              "code" : "165746003",
              "display" : "RhD negative (finding)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "65695-02",
          "display" : "Synagis 100 mg/1 ml, Injektionslösung",
          "target" : [
            {
              "code" : "55735004",
              "display" : "Respiratory syncytial virus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "65695-01",
          "display" : "Synagis 50 mg/0.5 ml, Injektionslösung",
          "target" : [
            {
              "code" : "55735004",
              "display" : "Respiratory syncytial virus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "00673-02",
          "display" : "Tetagam P, Injektionslösung",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "59374-01",
          "display" : "Uman Big 180 UI/1 ml, solution pour injection intramusculaire",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "59374-02",
          "display" : "Uman Big 540 UI/3 ml, solution pour injection intramusculaire",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "59451-01",
          "display" : "Varitect CP, Lösung zur intravenösen Injektion",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "59373-02",
          "display" : "Venbig 2500 U.I/50 ml, poudre et solution pour injection intraveineuse",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "59373-01",
          "display" : "Venbig 500 U.I/10 ml, poudre et solution pour injection intraveineuse",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "68471-01",
          "display" : "Xevudy, Konzentrat zur Herstellung einer Infusionslösung",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66344-01",
          "display" : "Zinplava, Konzentrat zur Herstellung einer Infusionslösung",
          "target" : [
            {
              "code" : "56688005",
              "display" : "Clostridial infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61639-01",
          "display" : "Zutectra, Injektionslösung",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
