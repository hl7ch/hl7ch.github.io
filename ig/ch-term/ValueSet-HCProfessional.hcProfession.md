# HCProfessional.hcProfession - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HCProfessional.hcProfession**

## ValueSet: HCProfessional.hcProfession 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:HCProfessionalHcProfession |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.8.1 (use: official, ) | |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
HCProfessional.hcProfession 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/HCProfessional.hcProfession) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "HCProfessional.hcProfession",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.8.1--20220626154804",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2022-06-26T15:48:04+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.8.1"
    }
  ],
  "version" : "3.3.0",
  "name" : "HCProfessionalHcProfession",
  "title" : "HCProfessional.hcProfession",
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
  "description" : "HCProfessional.hcProfession",
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
  "immutable" : false,
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.9",
        "concept" : [
          {
            "code" : "00000",
            "display" : "Other",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Andere"
              },
              {
                "language" : "fr-CH",
                "value" : "autre"
              },
              {
                "language" : "it-CH",
                "value" : "altro"
              },
              {
                "language" : "rm-CH",
                "value" : "auter"
              },
              {
                "language" : "en-US",
                "value" : "Other"
              }
            ]
          },
          {
            "code" : "00100",
            "display" : "Aktivierungsfachfrau/Aktivierungsfachmann",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fachperson für Aktivierung"
              },
              {
                "language" : "fr-CH",
                "value" : "spécialiste de l'activation"
              },
              {
                "language" : "it-CH",
                "value" : "specialista in attivazione"
              },
              {
                "language" : "rm-CH",
                "value" : "spezialist(-a) d'activaziun"
              },
              {
                "language" : "en-US",
                "value" : "Activation therapy specialist"
              }
            ]
          },
          {
            "code" : "00200",
            "display" : "Optician",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Optiker/Optikerin"
              },
              {
                "language" : "fr-CH",
                "value" : "opticien(ne)"
              },
              {
                "language" : "it-CH",
                "value" : "ottico(-a)"
              },
              {
                "language" : "rm-CH",
                "value" : "opticra/opticher"
              },
              {
                "language" : "en-US",
                "value" : "Optician"
              }
            ]
          },
          {
            "code" : "00300",
            "display" : "Biomedizinische Analytikerin/Biomedizinischer Analytiker",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Biomedizinischer Analytiker/Biomedizinische Analytikerin"
              },
              {
                "language" : "fr-CH",
                "value" : "technicien(ne) en analyses biomédicales"
              },
              {
                "language" : "it-CH",
                "value" : "tecnico(-a) in analisi biomediche"
              },
              {
                "language" : "rm-CH",
                "value" : "analiticra biomedicinala/analiticher biomedicinal"
              },
              {
                "language" : "en-US",
                "value" : "Biomedical analyst"
              }
            ]
          },
          {
            "code" : "00400",
            "display" : "Dental hygienist",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dentalhygieniker/Dentalhygienikerin"
              },
              {
                "language" : "fr-CH",
                "value" : "hygiéniste dentaire"
              },
              {
                "language" : "it-CH",
                "value" : "igienista dentale"
              },
              {
                "language" : "rm-CH",
                "value" : "igienicra/igienicher da dents"
              },
              {
                "language" : "en-US",
                "value" : "Dental hygienist"
              }
            ]
          },
          {
            "code" : "00500",
            "display" : "Drogist/Drogistin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Drogist/Drogistin"
              },
              {
                "language" : "fr-CH",
                "value" : "droguiste"
              },
              {
                "language" : "it-CH",
                "value" : "droghiere(-a)"
              },
              {
                "language" : "rm-CH",
                "value" : "droghist(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Druggist"
              }
            ]
          },
          {
            "code" : "00600",
            "display" : "Fachfrau für medizinisch-technische Radiologie/Fachmann für medizinisch-technische Radiologie",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fachperson für medizinisch-technische Radiologie"
              },
              {
                "language" : "fr-CH",
                "value" : "technicien(ne) en radiologie médicale"
              },
              {
                "language" : "it-CH",
                "value" : "tecnico(-a) di radiologia medica"
              },
              {
                "language" : "rm-CH",
                "value" : "spezialist(-a) da tecnica da radiologia medicinala"
              },
              {
                "language" : "en-US",
                "value" : "Medical-technical radiology assistant"
              }
            ]
          },
          {
            "code" : "00700",
            "display" : "Fachfrau Gesundheit/Fachmann Gesundheit",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fachperson Gesundheit"
              },
              {
                "language" : "fr-CH",
                "value" : "assistant(e) en soins et santé communautaire"
              },
              {
                "language" : "it-CH",
                "value" : "operatore(-trice) sociosanitario"
              },
              {
                "language" : "rm-CH",
                "value" : "spezialist(-a) da sanadad"
              },
              {
                "language" : "en-US",
                "value" : "Healthcare assistant"
              }
            ]
          },
          {
            "code" : "00800",
            "display" : "Fachfrau Operationstechnik/Fachmann Operationstechnik",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fachperson Operationstechnik"
              },
              {
                "language" : "fr-CH",
                "value" : "technicien(ne) en salle d'opération"
              },
              {
                "language" : "it-CH",
                "value" : "tecnico(-a) di sala operatoria"
              },
              {
                "language" : "rm-CH",
                "value" : "Spezialist(-as) da tecnica d'operaziun"
              },
              {
                "language" : "en-US",
                "value" : "Operating room technician"
              }
            ]
          },
          {
            "code" : "00900",
            "display" : "Medizinische Masseurin/Medizinischer Masseur",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinischer Masseur/Medizinische Masseurin"
              },
              {
                "language" : "fr-CH",
                "value" : "masseur(-euse) médical"
              },
              {
                "language" : "it-CH",
                "value" : "massaggiatore(-trice) medicale"
              },
              {
                "language" : "rm-CH",
                "value" : "massadra medicinala/massader medicinal"
              },
              {
                "language" : "en-US",
                "value" : "Medical masseur"
              }
            ]
          },
          {
            "code" : "01000",
            "display" : "Naturheilpraktikerin/Naturheilpraktiker",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naturheilpraktiker/Naturheilpraktikerin"
              },
              {
                "language" : "fr-CH",
                "value" : "naturopathe"
              },
              {
                "language" : "it-CH",
                "value" : "naturopata"
              },
              {
                "language" : "rm-CH",
                "value" : "naturopat(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Naturopathic practitioner"
              }
            ]
          },
          {
            "code" : "01100",
            "display" : "Optometrist",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Optometrist/Optometristin"
              },
              {
                "language" : "fr-CH",
                "value" : "optométriste"
              },
              {
                "language" : "it-CH",
                "value" : "optometrista"
              },
              {
                "language" : "rm-CH",
                "value" : "optometrist(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Optometrist"
              }
            ]
          },
          {
            "code" : "01200",
            "display" : "Orthoptist",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Orthoptist/Orthoptistin"
              },
              {
                "language" : "fr-CH",
                "value" : "orthoptiste"
              },
              {
                "language" : "it-CH",
                "value" : "ortottista"
              },
              {
                "language" : "rm-CH",
                "value" : "ortoptist(-a)"
              },
              {
                "language" : "en-US",
                "value" : "orthoptist"
              }
            ]
          },
          {
            "code" : "01300",
            "display" : "Osteopath",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Osteopath/Osteopathin"
              },
              {
                "language" : "fr-CH",
                "value" : "ostéopathe"
              },
              {
                "language" : "it-CH",
                "value" : "osteopata"
              },
              {
                "language" : "rm-CH",
                "value" : "osteopat(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Osteopath"
              }
            ]
          },
          {
            "code" : "01400",
            "display" : "Podologin/Podologe",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Podologe/Podologin"
              },
              {
                "language" : "fr-CH",
                "value" : "podologue"
              },
              {
                "language" : "it-CH",
                "value" : "podologo(-a)"
              },
              {
                "language" : "rm-CH",
                "value" : "podolog(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Podiatrist"
              }
            ]
          },
          {
            "code" : "01500",
            "display" : "Rettungssanitäterin/Rettungssanitäter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rettungssanitäter/Rettungssanitäterin"
              },
              {
                "language" : "fr-CH",
                "value" : "ambulancier(-ère)"
              },
              {
                "language" : "it-CH",
                "value" : "soccorritore(-trice)"
              },
              {
                "language" : "rm-CH",
                "value" : "sanitari(-a) da salvament"
              },
              {
                "language" : "en-US",
                "value" : "Paramedic"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "36682004",
            "display" : "Physiotherapist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Physiotherapeut/Physiotherapeutin"
              },
              {
                "language" : "fr-CH",
                "value" : "physiothérapeute"
              },
              {
                "language" : "it-CH",
                "value" : "fisioterapista"
              },
              {
                "language" : "rm-CH",
                "value" : "fisioterapeut(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Physiotherapist"
              }
            ]
          },
          {
            "code" : "3842006",
            "display" : "Chiropractor (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chiropraktiker/Chiropraktikerin"
              },
              {
                "language" : "fr-CH",
                "value" : "chiropraticien(ne)"
              },
              {
                "language" : "it-CH",
                "value" : "chiropratico(-a)"
              },
              {
                "language" : "rm-CH",
                "value" : "chiropraticra/chiropraticher"
              },
              {
                "language" : "en-US",
                "value" : "Chiropractor"
              }
            ]
          },
          {
            "code" : "46255001",
            "display" : "Pharmacist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Apotheker/Apothekerin"
              },
              {
                "language" : "fr-CH",
                "value" : "pharmacien(ne)"
              },
              {
                "language" : "it-CH",
                "value" : "farmacista"
              },
              {
                "language" : "rm-CH",
                "value" : "apotecra/apotecher"
              },
              {
                "language" : "en-US",
                "value" : "Pharmacist"
              }
            ]
          },
          {
            "code" : "59944000",
            "display" : "Psychologist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychologe/Psychologin"
              },
              {
                "language" : "fr-CH",
                "value" : "psychologue"
              },
              {
                "language" : "it-CH",
                "value" : "psicologo(-a)"
              },
              {
                "language" : "rm-CH",
                "value" : "psicolog(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Psychologist"
              }
            ]
          },
          {
            "code" : "80546007",
            "display" : "Occupational therapist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ergotherapeut/Ergotherapeutin"
              },
              {
                "language" : "fr-CH",
                "value" : "ergothérapeute"
              },
              {
                "language" : "it-CH",
                "value" : "ergoterapista"
              },
              {
                "language" : "rm-CH",
                "value" : "ergoterapeut(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Occupational therapist"
              }
            ]
          },
          {
            "code" : "106289002",
            "display" : "Dentist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zahnarzt/Zahnärztin"
              },
              {
                "language" : "fr-CH",
                "value" : "dentiste"
              },
              {
                "language" : "it-CH",
                "value" : "dentista"
              },
              {
                "language" : "rm-CH",
                "value" : "dentist(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Dentist"
              }
            ]
          },
          {
            "code" : "106292003",
            "display" : "Professional nurse (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pflegefachmann/Pflegefachfrau"
              },
              {
                "language" : "fr-CH",
                "value" : "infirmier(-ère)"
              },
              {
                "language" : "it-CH",
                "value" : "infermiere(-a)"
              },
              {
                "language" : "rm-CH",
                "value" : "tgirunz(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Professional nurse"
              }
            ]
          },
          {
            "code" : "159026005",
            "display" : "Speech/language therapist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sprachtherapeut/Sprachtherapeutin"
              },
              {
                "language" : "fr-CH",
                "value" : "orthophoniste"
              },
              {
                "language" : "it-CH",
                "value" : "logopedista"
              },
              {
                "language" : "rm-CH",
                "value" : "logoped(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Speech/language therapist"
              }
            ]
          },
          {
            "code" : "159033005",
            "display" : "Dietitian (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ernährungsberater/Ernährungsberaterin"
              },
              {
                "language" : "fr-CH",
                "value" : "diététicien(ne)"
              },
              {
                "language" : "it-CH",
                "value" : "dietista"
              },
              {
                "language" : "rm-CH",
                "value" : "cussegliadra/cussegliader da nutriment"
              },
              {
                "language" : "en-US",
                "value" : "Dietitian"
              }
            ]
          },
          {
            "code" : "309343006",
            "display" : "Physician (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Arzt/Ärztin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecin"
              },
              {
                "language" : "it-CH",
                "value" : "medico"
              },
              {
                "language" : "rm-CH",
                "value" : "medi(-a)"
              },
              {
                "language" : "en-US",
                "value" : "Physician"
              }
            ]
          },
          {
            "code" : "309453006",
            "display" : "Registered midwife (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Registrierte Hebamme"
              },
              {
                "language" : "fr-CH",
                "value" : "sage-femme"
              },
              {
                "language" : "it-CH",
                "value" : "levatrice"
              },
              {
                "language" : "rm-CH",
                "value" : "spendrera"
              },
              {
                "language" : "en-US",
                "value" : "Registered midwife"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
