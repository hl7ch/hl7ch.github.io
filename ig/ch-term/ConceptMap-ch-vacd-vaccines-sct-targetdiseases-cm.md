# Snomed CT VaccineCode To TargetDisease Mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Snomed CT VaccineCode To TargetDisease Mapping**

## ConceptMap: Snomed CT VaccineCode To TargetDisease Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sct-targetdiseases-cm | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SnomedCTVaccineCodeToTargetDiseaseMapping |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Mappings from SnomedCT VaccineCode to TargetDisease according to the correcsponding valuesets 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-vaccines-sct-targetdiseases-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sct-targetdiseases-cm",
  "version" : "3.3.0",
  "name" : "SnomedCTVaccineCodeToTargetDiseaseMapping",
  "title" : "Snomed CT VaccineCode To TargetDisease Mapping",
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
  "description" : "Mappings from SnomedCT VaccineCode to TargetDisease according to the correcsponding valuesets",
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
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-snomedct-vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "group" : [
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "871717007",
          "display" : "Vaccine product containing only Yellow fever virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "16541001",
              "display" : "Yellow fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871719005",
          "display" : "Vaccine product containing only Tick-borne encephalitis virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "712986001",
              "display" : "Central European encephalitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871724008",
          "display" : "Vaccine product containing only Japanese encephalitis virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "52947006",
              "display" : "Japanese encephalitis virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871726005",
          "display" : "Vaccine product containing only Rabies lyssavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871737006",
          "display" : "Vaccine product containing only Mumps orthorubulavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871739009",
          "display" : "Vaccine product containing only Human poliovirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871742003",
          "display" : "Vaccine product containing only Clostridium tetani antigen (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871751006",
          "display" : "Vaccine product containing only Hepatitis A virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871761004",
          "display" : "Vaccine product containing only Rotavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "18624000",
              "display" : "Disease caused by Rotavirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871764007",
          "display" : "Vaccine product containing only Haemophilus influenzae type B antigen (medicinal product)",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871765008",
          "display" : "Vaccine product containing only Measles morbillivirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871803007",
          "display" : "Vaccine product containing only Hepatitis A and Hepatitis B virus antigens (medicinal product)",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871822003",
          "display" : "Vaccine product containing only Hepatitis B virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871826000",
          "display" : "Vaccine product containing only Clostridium tetani and Corynebacterium diphtheriae antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871831003",
          "display" : "Vaccine product containing only Measles morbillivirus and Mumps orthorubulavirus and Rubella virus antigens (medicinal product)",
          "target" : [
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871837004",
          "display" : "Vaccine product containing only Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871866001",
          "display" : "Vaccine product containing only Neisseria meningitidis serogroup C antigen (medicinal product)",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871873006",
          "display" : "Vaccine product containing only Neisseria meningitidis serogroup A, C, W135 and Y antigens (medicinal product)",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871875004",
          "display" : "Vaccine product containing only Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871878002",
          "display" : "Vaccine product containing only Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871887006",
          "display" : "Vaccine product containing only Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type B and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871895005",
          "display" : "Vaccine product containing only Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type B and Hepatitis B virus and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871908002",
          "display" : "Vaccine product containing only Human alphaherpesvirus 3 and Measles morbillivirus and Mumps orthorubulavirus and Rubella virus antigens (medicinal product)",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871919004",
          "display" : "Vaccine product containing only live attenuated Human alphaherpesvirus 3 antigen (medicinal product)",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "4740000",
              "display" : "Herpes zoster (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1052328007",
          "display" : "Vaccine product containing only Streptococcus pneumoniae Danish serotype 4, 6B, 9V, 14, 18C, 19F, and 23F capsular polysaccharide antigens conjugated (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1119254000",
          "display" : "Vaccine product containing only Streptococcus pneumoniae Danish serotype 1, 3, 4, 5, 6A, 6B, 7F, 9V, 14, 18C, 19A, 19F, and 23F capsular polysaccharide antigens (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1119349007",
          "display" : "Vaccine product containing only Severe acute respiratory syndrome coronavirus 2 messenger ribonucleic acid (medicinal product)",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1156183006",
          "display" : "Vaccine product containing only Human alphaherpesvirus 3 recombinant surface glycoprotein E antigen (medicinal product)",
          "target" : [
            {
              "code" : "4740000",
              "display" : "Herpes zoster (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "961000221100",
          "display" : "Vaccine product containing only Salmonella enterica subspecies enterica serovar Typhi antigen (medicinal product)",
          "target" : [
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "981000221107",
          "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "991000221105",
          "display" : "Vaccine product containing only Vibrio cholerae antigen (medicinal product)",
          "target" : [
            {
              "code" : "63650001",
              "display" : "Cholera (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1181000221105",
          "display" : "Vaccine product containing only Influenza virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "719590007",
              "display" : "Influenza caused by seasonal influenza virus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "719865001",
              "display" : "Influenza caused by pandemic influenza virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1861000221106",
          "display" : "Vaccine product containing only live attenuated Mycobacterium bovis antigen (medicinal product)",
          "target" : [
            {
              "code" : "56717001",
              "display" : "Tuberculosis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "373437006",
              "display" : "Infection caused by Mycobacterium bovis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2001000221108",
          "display" : "Vaccine product containing only Human papillomavirus 6, 11, 16 and 18 antigens (medicinal product)",
          "target" : [
            {
              "code" : "240532009",
              "display" : "Human papillomavirus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "29061000087103",
          "display" : "Vaccine product containing only recombinant non-replicating viral vector encoding Severe acute respiratory syndrome coronavirus 2 spike protein (medicinal product)",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1162643001",
          "display" : "Vaccine product containing only severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen (medicinal product)",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1991000221106",
          "display" : "Vaccine product containing only Human papillomavirus 16 and 18 antigens (medicinal product)",
          "target" : [
            {
              "code" : "240532009",
              "display" : "Human papillomavirus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1209197008",
          "display" : "Vaccine product containing only Human papillomavirus 6, 11, 16, 18, 31, 33, 45, 52 and 58 antigens (medicinal product)",
          "target" : [
            {
              "code" : "240532009",
              "display" : "Human papillomavirus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1981000221108",
          "display" : "Vaccine product containing only Neisseria meningitidis serogroup B antigen (medicinal product)",
          "target" : [
            {
              "code" : "860805006",
              "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1119220001",
          "display" : "Vaccine product containing only Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1252708008",
          "display" : "Vaccine product containing only Streptococcus pneumoniae Danish serotype 1, 3, 4, 5, 6A, 6B, 7F, 9V, 14, 18C, 19A, 19F, 22F, 23F, and 33F capsular polysaccharide conjugated antigens (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "840563003",
          "display" : "Vaccine product containing Dengue virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "38362002",
              "display" : "Dengue (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836389008",
          "display" : "Vaccine product containing Vaccinia virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "111852003",
              "display" : "Vaccinia (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836401009",
          "display" : "Vaccine product containing Neisseria meningitidis antigen (medicinal product)",
          "target" : [
            {
              "code" : "860805006",
              "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836377006",
          "display" : "Vaccine product containing Influenza virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "6142004",
              "display" : "Influenza (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836495005",
          "display" : "Vaccine product containing Human alphaherpesvirus 3 antigen (medicinal product)",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836375003",
          "display" : "Vaccine product containing Hepatitis A virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836421005",
          "display" : "Vaccine product containing Ebolavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "37109004",
              "display" : "Ebola virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51311000087100",
          "display" : "Vaccine product containing only Human orthopneumovirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "55735004",
              "display" : "Respiratory syncytial virus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836402002",
          "display" : "Vaccine product containing live attenuated Mycobacterium bovis antigen (medicinal product)",
          "target" : [
            {
              "code" : "56717001",
              "display" : "Tuberculosis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "373437006",
              "display" : "Infection caused by Mycobacterium bovis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "37146000",
          "display" : "Typhus vaccine",
          "target" : [
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "409568008",
          "display" : "Pentavalent botulinum toxoid vaccine",
          "target" : [
            {
              "code" : "56688005",
              "display" : "Clostridial infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "428601009",
          "display" : "Paratyphoid vaccine",
          "target" : [
            {
              "code" : "85904008",
              "display" : "Paratyphoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "774618008",
          "display" : "Vaccine product containing only whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "775641005",
          "display" : "Vaccine product containing only Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "777725002",
          "display" : "Vaccine product containing only Clostridium tetani toxoid antigen adsorbed (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836368004",
          "display" : "Bacteria antigen-containing vaccine product",
          "target" : [
            {
              "equivalence" : "unmatched",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "836369007",
          "display" : "Virus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "34014006",
              "display" : "Viral disease",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836374004",
          "display" : "Hepatitis B virus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836378001",
          "display" : "Japanese encephalitis virus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "52947006",
              "display" : "Japanese encephalitis virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836379009",
          "display" : "Vaccine product containing Human papillomavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "240532009",
              "display" : "Human papillomavirus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836380007",
          "display" : "Vaccine product containing Haemophilus influenzae type b antigen (medicinal product)",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836381006",
          "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836382004",
          "display" : "Vaccine product containing Measles morbillivirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836383009",
          "display" : "Vibrio cholerae antigen-containing vaccine product",
          "target" : [
            {
              "code" : "63650001",
              "display" : "Cholera (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836384003",
          "display" : "Bacillus anthracis antigen-containing vaccine product",
          "target" : [
            {
              "code" : "409498004",
              "display" : "Anthrax (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836385002",
          "display" : "Yellow fever virus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "16541001",
              "display" : "Yellow fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836387005",
          "display" : "Rotavirus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "18624000",
              "display" : "Disease caused by Rotavirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836388000",
          "display" : "Vaccine product containing Rubella virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836390004",
          "display" : "Vaccine product containing Salmonella enterica subspecies enterica serovar Typhi antigen (medicinal product)",
          "target" : [
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836393002",
          "display" : "Vaccine product containing Rabies lyssavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836397001",
          "display" : "Vaccine product containing Coxiella burnetii antigen (medicinal product)",
          "target" : [
            {
              "code" : "721758001",
              "display" : "Infection caused by Coxiella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836398006",
          "display" : "Vaccine product containing Streptococcus pneumoniae antigen (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836400005",
          "display" : "Adenovirus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "25225006",
              "display" : "Disease caused by Adenovirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836403007",
          "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
          "target" : [
            {
              "code" : "712986001",
              "display" : "Central European encephalitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836498007",
          "display" : "Vaccine product containing Mumps orthorubulavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "836500008",
          "display" : "Vaccine product containing only Haemophilus influenzae type b and Neisseria meningitidis serogroup C antigens (medicinal product)",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "840549009",
          "display" : "Vaccine product containing Yersinia pestis antigen (medicinal product)",
          "target" : [
            {
              "code" : "83436008",
              "display" : "Yersiniosis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "840551008",
          "display" : "Vaccine product containing Francisella tularensis antigen (medicinal product)",
          "target" : [
            {
              "code" : "721734000",
              "display" : "Infection caused by Francisella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "840564009",
          "display" : "Vaccine product containing Leptospira antigen (medicinal product)",
          "target" : [
            {
              "code" : "77377001",
              "display" : "Leptospirosis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "840599008",
          "display" : "Borrelia burgdorferi antigen-containing vaccine product",
          "target" : [
            {
              "code" : "715507005",
              "display" : "Infection of central nervous system caused by Borrelia burgdorferi (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "860722004",
          "display" : "Vaccine product containing Junin virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "721778009",
              "display" : "Infection caused by Junin virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "860818003",
          "display" : "Bacillus anthracis antigen only vaccine product",
          "target" : [
            {
              "code" : "409498004",
              "display" : "Anthrax (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "863911006",
          "display" : "Vaccine product containing Clostridium tetani antigen (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "863950005",
          "display" : "Bacteria and virus antigens-containing vaccine product",
          "target" : [
            {
              "code" : "34014006",
              "display" : "Viral disease (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "87628006",
              "display" : "Bacterial infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "865997008",
          "display" : "Hepatitis A virus antigen only adult vaccine product",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871716003",
          "display" : "Tularemia vaccine",
          "target" : [
            {
              "code" : "19265001",
              "display" : "Tularemia (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871718002",
          "display" : "Plague vaccine",
          "target" : [
            {
              "code" : "58750007",
              "display" : "Plague (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871720004",
          "display" : "Vaccine product containing only Dengue virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "38362002",
              "display" : "Dengue (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871721000",
          "display" : "Vaccine product containing only Ebolavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "37109004",
              "display" : "Ebola virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871722007",
          "display" : "Adenovirus antigen only vaccine product",
          "target" : [
            {
              "code" : "25225006",
              "display" : "Disease caused by Adenovirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871723002",
          "display" : "Coxiella burnetii antigen only vaccine product",
          "target" : [
            {
              "code" : "721758001",
              "display" : "Infection caused by Coxiella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871725009",
          "display" : "Vaccine product containing only inactivated whole Japanese encephalitis virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "52947006",
              "display" : "Japanese encephalitis virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871727001",
          "display" : "Vaccine product containing only Vaccinia virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "111852003",
              "display" : "Vaccinia (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871729003",
          "display" : "Corynebacterium diphtheriae antigen only vaccine product",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871730008",
          "display" : "Low dose diphtheria vaccine",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871732000",
          "display" : "Rubella virus antigen only vaccine product",
          "target" : [
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871738001",
          "display" : "Live attenuated mumps vaccine",
          "target" : [
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871740006",
          "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
          "target" : [
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871750007",
          "display" : "Hepatitis A virus antigen only paediatric vaccine product",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871755002",
          "display" : "Typhoid Vi capsular polysaccharide vaccine",
          "target" : [
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871758000",
          "display" : "Pertussis vaccine",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871759008",
          "display" : "Acellular Bordetella pertussis only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871766009",
          "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871768005",
          "display" : "Influenza virus antigen only vaccine product in nasal dose form",
          "target" : [
            {
              "code" : "6142004",
              "display" : "Influenza (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871772009",
          "display" : "Influenza H1N1 vaccine",
          "target" : [
            {
              "code" : "442696006",
              "display" : "Influenza caused by Influenza A virus subtype H1N1 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871804001",
          "display" : "Hepatitis A virus and Salmonella enterica subspecies enterica serovar Typhi antigens only vaccine product",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871806004",
          "display" : "Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871816007",
          "display" : "Vaccine product containing only Clostridium tetani and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871817003",
          "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871825001",
          "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
          "target" : [
            {
              "code" : "52947006",
              "display" : "Japanese encephalitis virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871827009",
          "display" : "Low dose diphtheria and tetanus vaccine",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871830002",
          "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871838009",
          "display" : "Vaccine product containing only Clostridium tetani and low dose Corynebacterium diphtheriae and inactivated Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871839001",
          "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871871008",
          "display" : "Meningitis A and C vaccine",
          "target" : [
            {
              "code" : "7180009",
              "display" : "Meningitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871876003",
          "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871883005",
          "display" : "Pediatric vaccine product containing only acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871886002",
          "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871888001",
          "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871889009",
          "display" : "Diphtheria and hepatitis B and inactivated poliomyelitis and acellular pertussis vaccine",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871890000",
          "display" : "Vaccine product containing only Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871891001",
          "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Hepatitis B and inactivated whole Human poliovirus antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871893003",
          "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and inactivated Human poliovirus antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871894009",
          "display" : "Vaccine product containing only acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae and inactivated whole Human poliovirus antigens (medicinal product)",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871897002",
          "display" : "Rocky Mountain spotted fever vaccine",
          "target" : [
            {
              "code" : "186772009",
              "display" : "Rocky Mountain spotted fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871911001",
          "display" : "Vaccine product containing only Borrelia burgdorferi antigen (medicinal product)",
          "target" : [
            {
              "code" : "715507005",
              "display" : "Infection of central nervous system caused by Borrelia burgdorferi (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871916006",
          "display" : "Vaccine product containing only Neisseria meningitidis serogroup A, C, W135 and Y capsular oligosaccharide conjugated antigens (medicinal product)",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871918007",
          "display" : "Rickettsia antigen-containing vaccine product",
          "target" : [
            {
              "code" : "37246009",
              "display" : "Disease caused by rickettsiae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871921009",
          "display" : "Staphylococcus toxoid vaccine (medicinal product)",
          "target" : [
            {
              "code" : "56038003",
              "display" : "Staphylococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871925000",
          "display" : "Hepatitis B surface antigen vaccine",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871928003",
          "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus and Measles morbillivirus antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "871929006",
          "display" : "Clostridium tetani and Corynebacterium diphtheriae and Hepatitis B virus antigens only vaccine product",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1003499009",
          "display" : "Vaccine product containing only Influenza A virus subtype H5N1 antigen (medicinal product)",
          "target" : [
            {
              "code" : "772828001",
              "display" : "Influenza caused by Influenza A virus subtype H5N1 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1010308001",
          "display" : "Vaccine product containing only inactivated whole Hepatitis A virus HM-175 strain antigen (medicinal product)",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1010310004",
          "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1010313002",
          "display" : "Vaccine product containing only live attenuated Influenza virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "6142004",
              "display" : "Influenza (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1010318006",
          "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1010322001",
          "display" : "Vaccine product containing only live attenuated Human alphaherpesvirus 3 Oka strain antigen (medicinal product)",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1010689004",
          "display" : "Haemophilus influenzae type b capsular polysaccharide polyribosylribitol phosphate conjugated to Clostridium tetani toxoid vaccine",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1052330009",
          "display" : "Pneumococcal 10-valent conjugate vaccine",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1119279002",
          "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
          "target" : [
            {
              "code" : "772828001",
              "display" : "Influenza caused by Influenza A virus subtype H5N1 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1119305005",
          "display" : "2019 novel coronavirus antigen vaccine",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1119351006",
          "display" : "Vaccine product containing only Haemophilus influenzae type b and Neisseria meningitidis serogroup C and Y antigens (medicinal product)",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1156879008",
          "display" : "Diphtheria and hepatitis B and pertussis and tetanus vaccine",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1157024006",
          "display" : "Inactivated whole SARS-CoV-2 antigen vaccine",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1157356006",
          "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
          "target" : [
            {
              "code" : "442438000",
              "display" : "Influenza caused by Influenza A virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1162629006",
          "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
          "target" : [
            {
              "code" : "442438000",
              "display" : "Influenza caused by Influenza A virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1162634005",
          "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1162637003",
          "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1187593009",
          "display" : "Vaccine product containing only severe acute respiratory syndrome coronavirus 2 deoxyribonucleic acid plasmid encoding spike protein (medicinal product)",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1252690003",
          "display" : "Meningococcus serogroup A vaccine",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1252703004",
          "display" : "Vaccine product containing only Measles morbillivirus and Mumps orthorubulavirus (medicinal product)",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1252709000",
          "display" : "Pneumococcal 1, 3, 4, 5, 6A, 6B, 7F, 8, 9V, 10A, 11A, 12F, 14, 15B, 18C, 19A, 19F, 22F, 23F, 33F conjugate vaccine",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1254676002",
          "display" : "Vaccine product containing live attenuated virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "34014006",
              "display" : "Viral disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1269346004",
          "display" : "Vaccine product containing only live attenuated Vaccinia virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "111852003",
              "display" : "Vaccinia (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1287338003",
          "display" : "Tick-borne encephalitis virus antigen only paediatric vaccine product",
          "target" : [
            {
              "code" : "712986001",
              "display" : "Central European encephalitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1287595003",
          "display" : "Pediatric vaccine product containing only severe acute respiratory syndrome coronavirus 2 encoding B lineage spike protein and BA.4/BA.5 lineage spike protein messenger ribonucleic acid (medicinal product)",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1287596002",
          "display" : "Adult vaccine product containing only severe acute respiratory syndrome coronavirus 2 encoding B lineage spike protein and BA.4/BA.5 lineage spike protein messenger ribonucleic acid",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1287964002",
          "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1290123005",
          "display" : "Vaccine product containing protozoa antigen (medicinal product)",
          "target" : [
            {
              "code" : "95896000",
              "display" : "Protozoan infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1290624003",
          "display" : "Vaccine product containing Variola virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "67924001",
              "display" : "Smallpox (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1290625002",
          "display" : "Variola virus antigen only vaccine product",
          "target" : [
            {
              "code" : "67924001",
              "display" : "Smallpox (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1290764006",
          "display" : "Vaccine product containing only Human-bovine reassortant Rotavirus G1, G2, G3, G4, and P1A[8] antigens (medicinal product)",
          "target" : [
            {
              "code" : "18624000",
              "display" : "Disease caused by Rotavirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1293025000",
          "display" : "Vaccine product containing only modified Vaccinia virus Ankara antigen (medicinal product)",
          "target" : [
            {
              "code" : "111852003",
              "display" : "Vaccinia (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1296676008",
          "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1296677004",
          "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1296678009",
          "display" : "3 antigen Hepatitis B recombinant surface only vaccine product",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1296753004",
          "display" : "Paediatric vaccine inactivated whole Hepatitis A and Hepatitis B surface antigens only vaccine product",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1296864005",
          "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
          "target" : [
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1297215000",
          "display" : "Live attenuated rubella vaccine",
          "target" : [
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1297217008",
          "display" : "Pediatric vaccine product containing only acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens (medicinal product)",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91000221102",
          "display" : "Vaccine product containing only inactivated whole Hepatitis A virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "121000221105",
          "display" : "Vaccine product containing only inactivated whole Hepatitis A and Hepatitis B surface antigens (medicinal product)",
          "target" : [
            {
              "code" : "40468003",
              "display" : "Viral hepatitis, type A (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "601000221108",
          "display" : "Bordetella pertussis antigen-containing vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "911000221103",
          "display" : "Vaccine product containing only Human papillomavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "240532009",
              "display" : "Human papillomavirus infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "921000221108",
          "display" : "Neisseria meningitidis antigen only vaccine product",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "951000221102",
          "display" : "Vaccine product containing only Neisseria meningitidis serogroup C capsular polysaccharide conjugated antigen (medicinal product)",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "971000221109",
          "display" : "Live attenuated Salmonella enterica subspecies enterica serovar Typhi antigen only vaccine product in oral dose form",
          "target" : [
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1001000221103",
          "display" : "Inactivated cholera vaccine in oral dose form",
          "target" : [
            {
              "code" : "63650001",
              "display" : "Cholera (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1011000221100",
          "display" : "Live attenuated Vibrio cholerae antigen only vaccine product in oral dose form",
          "target" : [
            {
              "code" : "63650001",
              "display" : "Cholera (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1031000221108",
          "display" : "Vaccine product containing Human poliovirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1051000221104",
          "display" : "Live attenuated poliovirus serotypes 1 and 3 vaccine in oral dose form",
          "target" : [
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1061000221102",
          "display" : "Vaccine product containing only Neisseria meningitidis capsular polysaccharide antigen (medicinal product)",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1081000221109",
          "display" : "Vaccine product containing only live attenuated Rotavirus antigen (medicinal product)",
          "target" : [
            {
              "code" : "18624000",
              "display" : "Disease caused by Rotavirus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1101000221104",
          "display" : "Vaccine product containing Clostridium tetani toxoid antigen (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1111000221101",
          "display" : "Vaccine product containing only live attenuated Junin virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "721778009",
              "display" : "Infection caused by Junin virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1121000221106",
          "display" : "Vaccine product containing only live attenuated Yellow fever virus antigen (medicinal product)",
          "target" : [
            {
              "code" : "16541001",
              "display" : "Yellow fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1131000221109",
          "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1801000221105",
          "display" : "Vaccine product containing only Streptococcus pneumoniae capsular polysaccharide antigen conjugated (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "1971000221105",
          "display" : "Vaccine product containing only Neisseria meningitidis serogroup A, C, W135 and Y capsular polysaccharide conjugated antigens (medicinal product)",
          "target" : [
            {
              "code" : "23511006",
              "display" : "Meningococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2021000221101",
          "display" : "Tetanus toxoid vaccine",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2031000221103",
          "display" : "Adult vaccine product containing only Clostridium tetani and Corynebacterium diphtheriae toxoids (medicinal product)",
          "target" : [
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2041000221105",
          "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2051000221107",
          "display" : "Adult vaccine product containing only acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens (medicinal product)",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2061000221109",
          "display" : "Pediatric vaccine product containing only whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid (medicinal product)",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2071000221100",
          "display" : "Whole cell Bordetella pertussis and Corynebacterium diphtheriae toxoid and Clostridium tetani toxoid and Haemophilus influenzae type b capsular polysaccharide conjugated antigens only pediatric vaccine",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2081000221102",
          "display" : "Diphtheria toxoid, Haemophilus influenzae type b conjugate, hepatitis B surface antigen, acellular pertussis and tetanus toxoid pediatric vaccine",
          "target" : [
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2091000221104",
          "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2101000221107",
          "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2171000221104",
          "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
          "target" : [
            {
              "code" : "4834000",
              "display" : "Typhoid fever (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2181000221101",
          "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
          "target" : [
            {
              "code" : "63650001",
              "display" : "Cholera (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2191000221103",
          "display" : "Inactivated rabies vaccine grown in cellular line",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2201000221100",
          "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen grown in brain tissue (medicinal product)",
          "target" : [
            {
              "code" : "14168008",
              "display" : "Rabies (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2211000221102",
          "display" : "Influenza A virus subtypes H1N1 and H3N2 and influenza B virus Victoria lineage antigens only vaccine product",
          "target" : [
            {
              "code" : "442696006",
              "display" : "Influenza caused by Influenza A virus subtype H1N1 (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "772810003",
              "display" : "Influenza caused by Influenza A virus subtype H3N2 (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "24662006",
              "display" : "Influenza caused by Influenza B virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2221000221107",
          "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
          "target" : [
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2231000221105",
          "display" : "Vaccine product containing only live attenuated Measles morbillivirus and Rubella virus antigens (medicinal product)",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2241000221103",
          "display" : "Vaccine product containing only live attenuated Measles morbillivirus and Mumps orthorubulavirus and Rubella virus antigens (medicinal product)",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2251000221101",
          "display" : "Vaccine product containing only live attenuated Measles morbillivirus and Mumps orthorubulavirus and Rubella virus and Human alphaherpesvirus 3 antigens (medicinal product)",
          "target" : [
            {
              "code" : "14189004",
              "display" : "Measles (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36989005",
              "display" : "Mumps (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "36653000",
              "display" : "Rubella (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "38907003",
              "display" : "Varicella (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "2261000221104",
          "display" : "Vaccine product containing only influenza A virus subtypes H1N1 and H3N2 and influenza B virus Victoria and Yamagata lineage antigens (medicinal product)",
          "target" : [
            {
              "code" : "442696006",
              "display" : "Influenza caused by Influenza A virus subtype H1N1 (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "772810003",
              "display" : "Influenza caused by Influenza A virus subtype H3N2 (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "24662006",
              "display" : "Influenza caused by Influenza B virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "28531000087107",
          "display" : "COVID-19 vaccine",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "30141000087107",
          "display" : "COVID-19 virus-like particle antigen vaccine",
          "target" : [
            {
              "code" : "840539006",
              "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "45861000087106",
          "display" : "Vaccine product containing Plasmodium falciparum antigen (medicinal product)",
          "target" : [
            {
              "code" : "62676009",
              "display" : "Falciparum malaria (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "45891000087103",
          "display" : "Live attenuated Zaire ebolavirus antigen only vaccine product",
          "target" : [
            {
              "code" : "37109004",
              "display" : "Ebola virus disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51451000087105",
          "display" : "Vaccine product containing only Streptococcus pneumoniae Danish serotype 1, 3, 4, 5, 6A, 6B, 7F, 9V, 14, 18C, 19A, 19F, and 23F capsular polysaccharide antigens conjugated (medicinal product)",
          "target" : [
            {
              "code" : "16814004",
              "display" : "Pneumococcal infectious disease (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51591000087104",
          "display" : "Vaccine product containing only Enterovirus A71 antigen",
          "target" : [
            {
              "code" : "713456006",
              "display" : "Infection caused by Human enterovirus 71 (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "318341000221109",
          "display" : "Diphtheria toxoid and Haemophilus influenzae type b conjugate and acellular pertussis and tetanus toxoid pediatric vaccine",
          "target" : [
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "709410003",
              "display" : "Haemophilus influenzae type b infection (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "318351000221106",
          "display" : "Pediatric vaccine product containing only acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens (medicinal product)",
          "target" : [
            {
              "code" : "27836007",
              "display" : "Pertussis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76902006",
              "display" : "Tetanus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "398102009",
              "display" : "Acute poliomyelitis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "319941000221104",
          "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
          "target" : [
            {
              "code" : "56717001",
              "display" : "Tuberculosis (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "373437006",
              "display" : "Infection caused by Mycobacterium bovis (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
