# DocumentEntry.authorSpeciality - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.authorSpeciality**

## ValueSet: DocumentEntry.authorSpeciality 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.authorSpeciality | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DocumentEntryAuthorSpeciality |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.1.4 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Speciality of the author as per Annex 3. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.authorSpeciality) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "DocumentEntry.authorSpeciality",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.1.4--20220624110129",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2022-06-24T11:01:29+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.authorSpeciality",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.1.4"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntryAuthorSpeciality",
  "title" : "DocumentEntry.authorSpeciality",
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
  "description" : "Speciality of the author as per Annex 3.",
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
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.6",
        "concept" : [
          {
            "code" : "5001",
            "display" : "Optics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Augenoptik"
              },
              {
                "language" : "rm-CH",
                "value" : "Optica"
              },
              {
                "language" : "fr-CH",
                "value" : "Optique"
              },
              {
                "language" : "it-CH",
                "value" : "Ottica"
              },
              {
                "language" : "en-US",
                "value" : "Optics"
              }
            ]
          },
          {
            "code" : "5002",
            "display" : "Activation",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aktivierung"
              },
              {
                "language" : "rm-CH",
                "value" : "Activaziun"
              },
              {
                "language" : "fr-CH",
                "value" : "Activation"
              },
              {
                "language" : "it-CH",
                "value" : "Attivazione"
              },
              {
                "language" : "en-US",
                "value" : "Activation"
              }
            ]
          },
          {
            "code" : "5003",
            "display" : "Biomedical analysis",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Biomedizinische Analytik"
              },
              {
                "language" : "rm-CH",
                "value" : "Analitica biomedicinala"
              },
              {
                "language" : "fr-CH",
                "value" : "Analyses biomédicales"
              },
              {
                "language" : "it-CH",
                "value" : "Analisi biomediche"
              },
              {
                "language" : "en-US",
                "value" : "Biomedical analysis"
              }
            ]
          },
          {
            "code" : "5004",
            "display" : "Dental hygiene",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dentalhygiene"
              },
              {
                "language" : "rm-CH",
                "value" : "Igienica dentala"
              },
              {
                "language" : "fr-CH",
                "value" : "Hygiène dentaire"
              },
              {
                "language" : "it-CH",
                "value" : "Igiene dentale"
              },
              {
                "language" : "en-US",
                "value" : "Dental hygiene"
              }
            ]
          },
          {
            "code" : "5005",
            "display" : "Pharmaceutical",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Drogist/Drogistin"
              },
              {
                "language" : "rm-CH",
                "value" : "Droghista/droghist"
              },
              {
                "language" : "fr-CH",
                "value" : "Droguiste"
              },
              {
                "language" : "it-CH",
                "value" : "Droghiere/Droghiera"
              },
              {
                "language" : "en-US",
                "value" : "Pharmaceutical"
              }
            ]
          },
          {
            "code" : "5006",
            "display" : "Occupational Therapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ergotherapie"
              },
              {
                "language" : "rm-CH",
                "value" : "Ergoterapia"
              },
              {
                "language" : "fr-CH",
                "value" : "Ergothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "Ergoterapia"
              },
              {
                "language" : "en-US",
                "value" : "Occupational therapy"
              }
            ]
          },
          {
            "code" : "5007",
            "display" : "Nutrition and Dietetics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ernährungsberatung"
              },
              {
                "language" : "rm-CH",
                "value" : "Cussegliaziun da nutriment"
              },
              {
                "language" : "fr-CH",
                "value" : "Diététique"
              },
              {
                "language" : "it-CH",
                "value" : "Consulenza alimentare"
              },
              {
                "language" : "en-US",
                "value" : "Nutrition and dietetics"
              }
            ]
          },
          {
            "code" : "5008",
            "display" : "Radiologic Technology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinisch-technische Radiologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Tecnica da radiologia (medicinala)"
              },
              {
                "language" : "fr-CH",
                "value" : "Technique en radiologie médicale"
              },
              {
                "language" : "it-CH",
                "value" : "Tecniche di radiologia medica"
              },
              {
                "language" : "en-US",
                "value" : "Radiologic technology"
              }
            ]
          },
          {
            "code" : "5009",
            "display" : "Surgical Technology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Operationstechnik"
              },
              {
                "language" : "rm-CH",
                "value" : "Tecnica d'operaziun"
              },
              {
                "language" : "fr-CH",
                "value" : "Technique opératoire"
              },
              {
                "language" : "it-CH",
                "value" : "Tecnica operatoria"
              },
              {
                "language" : "en-US",
                "value" : "Surgical technology"
              }
            ]
          },
          {
            "code" : "5010",
            "display" : "Midwifery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Geburtshilfe"
              },
              {
                "language" : "rm-CH",
                "value" : "Assistenza al part – spendrera"
              },
              {
                "language" : "fr-CH",
                "value" : "Obstétrique"
              },
              {
                "language" : "it-CH",
                "value" : "Ostetricia"
              },
              {
                "language" : "en-US",
                "value" : "Midwifery"
              }
            ]
          },
          {
            "code" : "5011",
            "display" : "Speech and Language Therapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Logopädie"
              },
              {
                "language" : "rm-CH",
                "value" : "Logopedia"
              },
              {
                "language" : "fr-CH",
                "value" : "Logopédie"
              },
              {
                "language" : "it-CH",
                "value" : "Logopedia"
              },
              {
                "language" : "en-US",
                "value" : "Speech and language therapy"
              }
            ]
          },
          {
            "code" : "5012",
            "display" : "Massage Therapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinische Massage"
              },
              {
                "language" : "rm-CH",
                "value" : "Massascha medicinala"
              },
              {
                "language" : "fr-CH",
                "value" : "Massage médical"
              },
              {
                "language" : "it-CH",
                "value" : "Massaggio medico"
              },
              {
                "language" : "en-US",
                "value" : "Massage Therapy"
              }
            ]
          },
          {
            "code" : "5013",
            "display" : "Orthoptics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Orthoptik"
              },
              {
                "language" : "rm-CH",
                "value" : "Ortoptica"
              },
              {
                "language" : "fr-CH",
                "value" : "Orthoptique"
              },
              {
                "language" : "it-CH",
                "value" : "Ortottica"
              },
              {
                "language" : "en-US",
                "value" : "Orthoptics"
              }
            ]
          },
          {
            "code" : "5014",
            "display" : "Osteopathy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Osteopathie"
              },
              {
                "language" : "rm-CH",
                "value" : "Osteopatia"
              },
              {
                "language" : "fr-CH",
                "value" : "Ostéopathie"
              },
              {
                "language" : "it-CH",
                "value" : "Osteopatia"
              },
              {
                "language" : "en-US",
                "value" : "Osteopathy"
              }
            ]
          },
          {
            "code" : "5015",
            "display" : "Nursing",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pflege"
              },
              {
                "language" : "rm-CH",
                "value" : "Tgira"
              },
              {
                "language" : "fr-CH",
                "value" : "Soins infirmiers"
              },
              {
                "language" : "it-CH",
                "value" : "Cure infermieristiche"
              },
              {
                "language" : "en-US",
                "value" : "Nursing"
              }
            ]
          },
          {
            "code" : "5016",
            "display" : "Physiotherapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Physiotherapie"
              },
              {
                "language" : "rm-CH",
                "value" : "Fisioterapia"
              },
              {
                "language" : "fr-CH",
                "value" : "Physiothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "Fisioterapia"
              },
              {
                "language" : "en-US",
                "value" : "Physiotherapy"
              }
            ]
          },
          {
            "code" : "5017",
            "display" : "Podiatry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Podologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Podologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Podologie"
              },
              {
                "language" : "it-CH",
                "value" : "Podologia"
              },
              {
                "language" : "en-US",
                "value" : "Podiatry"
              }
            ]
          },
          {
            "code" : "5018",
            "display" : "Paramedics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rettungssanität"
              },
              {
                "language" : "rm-CH",
                "value" : "Sanitad da salvament"
              },
              {
                "language" : "fr-CH",
                "value" : "Sauvetage"
              },
              {
                "language" : "it-CH",
                "value" : "Soccorso sanitario"
              },
              {
                "language" : "en-US",
                "value" : "Paramedics"
              }
            ]
          },
          {
            "code" : "5019",
            "display" : "Optometry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Optometrie"
              },
              {
                "language" : "rm-CH",
                "value" : "Optometria"
              },
              {
                "language" : "fr-CH",
                "value" : "Optométrie"
              },
              {
                "language" : "it-CH",
                "value" : "Optometria"
              },
              {
                "language" : "en-US",
                "value" : "Optometry"
              }
            ]
          },
          {
            "code" : "5021",
            "display" : "Naturopathy Ayurveda Medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naturheilpraktiker/-in Ayurveda-Medizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Naturopatia/medischina ayurvedica"
              },
              {
                "language" : "fr-CH",
                "value" : "Naturopathe médecine ayurvédique"
              },
              {
                "language" : "it-CH",
                "value" : "Naturopata medicina ayurvedica"
              },
              {
                "language" : "en-US",
                "value" : "Naturopathy ayurveda medicine"
              }
            ]
          },
          {
            "code" : "5022",
            "display" : "Naturopathy Homeopathy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naturheilpraktiker/-in Homöopathie"
              },
              {
                "language" : "rm-CH",
                "value" : "Naturopatia/omeopatia"
              },
              {
                "language" : "fr-CH",
                "value" : "Naturopathe homéopathie"
              },
              {
                "language" : "it-CH",
                "value" : "Naturopata omeopatia"
              },
              {
                "language" : "en-US",
                "value" : "Naturopathy homeopathy"
              }
            ]
          },
          {
            "code" : "5023",
            "display" : "Naturopathy Traditional Chinese Medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naturheilpraktiker/-in Trad. Chinesische Medizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Naturopatia/medischina tradiziunala chinaisa"
              },
              {
                "language" : "fr-CH",
                "value" : "Naturopathe médecine trad. chinoise"
              },
              {
                "language" : "it-CH",
                "value" : "Naturopata medicina trad. cinese"
              },
              {
                "language" : "en-US",
                "value" : "Naturopathy traditional chinese medicine"
              }
            ]
          },
          {
            "code" : "5024",
            "display" : "Naturopathy European Traditional Medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naturheilpraktiker/-in Trad. Europäische Naturheilkunde"
              },
              {
                "language" : "rm-CH",
                "value" : "Naturopatia/medischina tradiziunala europeica"
              },
              {
                "language" : "fr-CH",
                "value" : "Naturopathe médecine naturelle trad. européenne"
              },
              {
                "language" : "it-CH",
                "value" : "Naturopata medicina naturale trad. europea"
              },
              {
                "language" : "en-US",
                "value" : "Naturopathy traditional european medicine"
              }
            ]
          }
        ]
      },
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
        "concept" : [
          {
            "code" : "1002",
            "display" : "Surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia"
              },
              {
                "language" : "en-US",
                "value" : "Surgery"
              }
            ]
          },
          {
            "code" : "1003",
            "display" : "Gynaecology and obstetrics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gynäkologie und Geburtshilfe"
              },
              {
                "language" : "rm-CH",
                "value" : "Ginecologia ed assistenza al part"
              },
              {
                "language" : "fr-CH",
                "value" : "Gynécologie et obstétrique"
              },
              {
                "language" : "it-CH",
                "value" : "Ginecologia e ostetricia"
              },
              {
                "language" : "en-US",
                "value" : "Gynaecology and obstetrics"
              }
            ]
          },
          {
            "code" : "1004",
            "display" : "Cardiac and thoracic vascular surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Herz- und thorakale Gefässchirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia dal cor e chirurgia vasculara dal torax"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie cardiaque et vasculaire thoracique"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia del cuore e dei vasi toracici"
              },
              {
                "language" : "en-US",
                "value" : "Cardiac and thoracic vascular surgery"
              }
            ]
          },
          {
            "code" : "1006",
            "display" : "Paediatrics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kinder- und Jugendmedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Pediatria"
              },
              {
                "language" : "fr-CH",
                "value" : "Pédiatrie"
              },
              {
                "language" : "it-CH",
                "value" : "Pediatria"
              },
              {
                "language" : "en-US",
                "value" : "Paediatrics"
              }
            ]
          },
          {
            "code" : "1007",
            "display" : "Ophthalmology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ophthalmologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Oftalmologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Ophtalmologie"
              },
              {
                "language" : "it-CH",
                "value" : "Oftalmologia"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmology"
              }
            ]
          },
          {
            "code" : "1008",
            "display" : "Otorhinolaryngology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oto-Rhino-Laryngologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Oto-rino-laringologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Oto-rhino-laryngologie"
              },
              {
                "language" : "it-CH",
                "value" : "Otorinolaringoiatria"
              },
              {
                "language" : "en-US",
                "value" : "Otorhinolaryngology"
              }
            ]
          },
          {
            "code" : "1009",
            "display" : "Pathology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pathologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Patologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Pathologie"
              },
              {
                "language" : "it-CH",
                "value" : "Patologia"
              },
              {
                "language" : "en-US",
                "value" : "Pathology"
              }
            ]
          },
          {
            "code" : "1010",
            "display" : "Orthodontics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kieferorthopädie"
              },
              {
                "language" : "rm-CH",
                "value" : "Ortopedia da la missella"
              },
              {
                "language" : "fr-CH",
                "value" : "Orthodontie"
              },
              {
                "language" : "it-CH",
                "value" : "Ortodonzia"
              },
              {
                "language" : "en-US",
                "value" : "Orthodontics"
              }
            ]
          },
          {
            "code" : "1011",
            "display" : "Chiropractic specialist",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fachchiropraktik"
              },
              {
                "language" : "rm-CH",
                "value" : "Chiropratica speziala"
              },
              {
                "language" : "fr-CH",
                "value" : "Chiropratique spécialisée"
              },
              {
                "language" : "it-CH",
                "value" : "Chiropratica specialistica"
              },
              {
                "language" : "en-US",
                "value" : "Chiropractic specialist"
              }
            ]
          },
          {
            "code" : "1012",
            "display" : "Anaesthesiology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anästhesiologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Anestesiologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Anesthésiologie"
              },
              {
                "language" : "it-CH",
                "value" : "Anestesiologia"
              },
              {
                "language" : "en-US",
                "value" : "Anaesthesiology"
              }
            ]
          },
          {
            "code" : "1013",
            "display" : "Neurosurgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neurochirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Neurochirurgia"
              },
              {
                "language" : "fr-CH",
                "value" : "Neurochirurgie"
              },
              {
                "language" : "it-CH",
                "value" : "Neurochirurgia"
              },
              {
                "language" : "en-US",
                "value" : "Neurosurgery"
              }
            ]
          },
          {
            "code" : "1014",
            "display" : "Neurology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neurologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Neurologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Neurologie"
              },
              {
                "language" : "it-CH",
                "value" : "Neurologia"
              },
              {
                "language" : "en-US",
                "value" : "Neurology"
              }
            ]
          },
          {
            "code" : "1015",
            "display" : "Orthopaedic surgery and traumatology of the locomotor apparatus",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Orthopädische Chirurgie und Traumatologie des Bewegungsapparates"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia ortopedica e traumatologia da l'apparat motoric"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie orthopédique et traumatologie de l’appareil locomoteur"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia ortopedica e traumatologia dell'apparato locomotore"
              },
              {
                "language" : "en-US",
                "value" : "Orthopaedic surgery and traumatology of the locomotor apparatus"
              }
            ]
          },
          {
            "code" : "1016",
            "display" : "Pneumology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pneumologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Pneumologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Pneumologie"
              },
              {
                "language" : "it-CH",
                "value" : "Pneumologia"
              },
              {
                "language" : "en-US",
                "value" : "Pneumology"
              }
            ]
          },
          {
            "code" : "1017",
            "display" : "Psychiatry and psychotherapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychiatrie und Psychotherapie"
              },
              {
                "language" : "rm-CH",
                "value" : "Psichiatria e psicoterapia"
              },
              {
                "language" : "fr-CH",
                "value" : "Psychiatrie et psychothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "Psichiatria e psicoterapia"
              },
              {
                "language" : "en-US",
                "value" : "Psychiatry and psychotherapy"
              }
            ]
          },
          {
            "code" : "1018",
            "display" : "Urology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Urologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Urologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Urologie"
              },
              {
                "language" : "it-CH",
                "value" : "Urologia"
              },
              {
                "language" : "en-US",
                "value" : "Urology"
              }
            ]
          },
          {
            "code" : "1019",
            "display" : "Allergology and clinical immunology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Allergologie und klinische Immunologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Allergologia ed immunologia clinica"
              },
              {
                "language" : "fr-CH",
                "value" : "Allergologie et immunologie clinique"
              },
              {
                "language" : "it-CH",
                "value" : "Allergologia e immunologia clinica"
              },
              {
                "language" : "en-US",
                "value" : "Allergology and clinical immunology"
              }
            ]
          },
          {
            "code" : "1020",
            "display" : "Occupational medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Arbeitsmedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina da lavur"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine du travail"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina del lavoro"
              },
              {
                "language" : "en-US",
                "value" : "Occupational medicine"
              }
            ]
          },
          {
            "code" : "1021",
            "display" : "Dermatology and venereology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dermatologie und Venerologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Dermatologia e venerologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Dermatologie et vénéréologie"
              },
              {
                "language" : "it-CH",
                "value" : "Dermatologia e venereologia"
              },
              {
                "language" : "en-US",
                "value" : "Dermatology and venereology"
              }
            ]
          },
          {
            "code" : "1022",
            "display" : "Endocrinology – Diabetology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Endokrinologie und Diabetologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Endocrinologia e diabetologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Endocrinologie et diabétologie"
              },
              {
                "language" : "it-CH",
                "value" : "Endocrinologia e diabetologia"
              },
              {
                "language" : "en-US",
                "value" : "Endocrinology and diabetology"
              }
            ]
          },
          {
            "code" : "1023",
            "display" : "Gastroenterology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gastroenterologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Gastroenterologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Gastroentérologie"
              },
              {
                "language" : "it-CH",
                "value" : "Gastroenterologia"
              },
              {
                "language" : "en-US",
                "value" : "Gastroenterology"
              }
            ]
          },
          {
            "code" : "1024",
            "display" : "Haematology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hämatologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Hematologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Hématologie"
              },
              {
                "language" : "it-CH",
                "value" : "Ematologia"
              },
              {
                "language" : "en-US",
                "value" : "Haematology"
              }
            ]
          },
          {
            "code" : "1025",
            "display" : "Cardiology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kardiologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Cardiologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Cardiologie"
              },
              {
                "language" : "it-CH",
                "value" : "Cardiologia"
              },
              {
                "language" : "en-US",
                "value" : "Cardiology"
              }
            ]
          },
          {
            "code" : "1026",
            "display" : "Oral and maxillofacial surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mund-, Kiefer- und Gesichtschirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia da la bucca, da la missella e da la fatscha"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie orale et maxillo-faciale"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia oro-maxillo-facciale"
              },
              {
                "language" : "en-US",
                "value" : "Oral and maxillofacial surgery"
              }
            ]
          },
          {
            "code" : "1027",
            "display" : "Child and adolescent psychiatry and psychotherapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kinder- und Jugendpsychiatrie und -psychotherapie"
              },
              {
                "language" : "rm-CH",
                "value" : "Psichiatria e psicoterapia d'uffants e da giuvenils"
              },
              {
                "language" : "fr-CH",
                "value" : "Psychiatrie et psychothérapie d'enfants et d’adolescents"
              },
              {
                "language" : "it-CH",
                "value" : "Psichiatria e psicoterapia infantile e dell'adolescenza"
              },
              {
                "language" : "en-US",
                "value" : "Child and adolescent psychiatry and psychotherapy"
              }
            ]
          },
          {
            "code" : "1028",
            "display" : "Paediatric surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kinderchirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia d'uffants"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie pédiatrique"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia pediatrica"
              },
              {
                "language" : "en-US",
                "value" : "Paediatric surgery"
              }
            ]
          },
          {
            "code" : "1029",
            "display" : "Clinical pharmacology and toxicology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Klinische Pharmakologie und Toxikologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Farmacologia e toxicologia clinica"
              },
              {
                "language" : "fr-CH",
                "value" : "Pharmacologie et toxicologie cliniques"
              },
              {
                "language" : "it-CH",
                "value" : "Farmacologia e tossicologia cliniche"
              },
              {
                "language" : "en-US",
                "value" : "Clinical pharmacology and toxicology"
              }
            ]
          },
          {
            "code" : "1030",
            "display" : "Radiology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Radiologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Radiologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Radiologie"
              },
              {
                "language" : "it-CH",
                "value" : "Radiologia"
              },
              {
                "language" : "en-US",
                "value" : "Radiology"
              }
            ]
          },
          {
            "code" : "1031",
            "display" : "Nuclear medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nuklearmedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina nucleara"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine nucléaire"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina nucleare"
              },
              {
                "language" : "en-US",
                "value" : "Nuclear medicine"
              }
            ]
          },
          {
            "code" : "1032",
            "display" : "Radio-oncology / radiotherapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Radio-Onkologie/Strahlentherapie"
              },
              {
                "language" : "rm-CH",
                "value" : "Radio-oncologia/radioterapia"
              },
              {
                "language" : "fr-CH",
                "value" : "Radio-oncologie/radiothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "Radio-oncologia/radioterapia"
              },
              {
                "language" : "en-US",
                "value" : "Radio-oncology/radiotherapy"
              }
            ]
          },
          {
            "code" : "1033",
            "display" : "Nephrology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nephrologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Nefrologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Néphrologie"
              },
              {
                "language" : "it-CH",
                "value" : "Nefrologia"
              },
              {
                "language" : "en-US",
                "value" : "Nephrology"
              }
            ]
          },
          {
            "code" : "1034",
            "display" : "Physical medicine and rehabilitation",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Physikalische Medizin und Rehabilitation"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina fisicala e reabilitaziun"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine physique et réadaptation"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina fisica e riabilitazione"
              },
              {
                "language" : "en-US",
                "value" : "Physical medicine and rehabilitation"
              }
            ]
          },
          {
            "code" : "1035",
            "display" : "Plastic, reconstructive and aesthetic surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Plastische, Rekonstruktive und Ästhetische Chirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia plastica, reconstructiva ed estetica"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie plastique, reconstructive et esthétique"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia plastica, ricostruttiva ed estetica"
              },
              {
                "language" : "en-US",
                "value" : "Plastic, reconstructive and aesthetic surgery"
              }
            ]
          },
          {
            "code" : "1036",
            "display" : "Prevention and public health",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prävention und Gesundheitswesen"
              },
              {
                "language" : "rm-CH",
                "value" : "Prevenziun e sanadad publica"
              },
              {
                "language" : "fr-CH",
                "value" : "Prévention et santé publique"
              },
              {
                "language" : "it-CH",
                "value" : "Prevenzione e salute pubblica"
              },
              {
                "language" : "en-US",
                "value" : "Prevention and public health"
              }
            ]
          },
          {
            "code" : "1037",
            "display" : "Rheumatology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rheumatologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Reumatologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Rhumatologie"
              },
              {
                "language" : "it-CH",
                "value" : "Reumatologia"
              },
              {
                "language" : "en-US",
                "value" : "Rheumatology"
              }
            ]
          },
          {
            "code" : "1038",
            "display" : "Tropical and travel medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tropen- und Reisemedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina da las tropas e da viadis"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine tropicale et médecine des voyages"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina tropicale e medicina di viaggio"
              },
              {
                "language" : "en-US",
                "value" : "Tropical and travel medicine"
              }
            ]
          },
          {
            "code" : "1039",
            "display" : "Infectology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektiologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Infecziologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Infectiologie"
              },
              {
                "language" : "it-CH",
                "value" : "Malattie infettive"
              },
              {
                "language" : "en-US",
                "value" : "Infectology"
              }
            ]
          },
          {
            "code" : "1040",
            "display" : "General medical practitioner",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Praktischer Arzt/Praktische Ärztin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medi generalist/media generalista"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecin praticien"
              },
              {
                "language" : "it-CH",
                "value" : "Medico generico"
              },
              {
                "language" : "en-US",
                "value" : "General medical practitioner"
              }
            ]
          },
          {
            "code" : "1041",
            "display" : "Angiology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Angiologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Angiologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Angiologie"
              },
              {
                "language" : "it-CH",
                "value" : "Angiologia"
              },
              {
                "language" : "en-US",
                "value" : "Angiology"
              }
            ]
          },
          {
            "code" : "1042",
            "display" : "Intensive care medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intensivmedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina intensiva"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine intensive"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina intensiva"
              },
              {
                "language" : "en-US",
                "value" : "Intensive care medicine"
              }
            ]
          },
          {
            "code" : "1043",
            "display" : "Medical genetics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinische Genetik"
              },
              {
                "language" : "rm-CH",
                "value" : "Genetica medicinala"
              },
              {
                "language" : "fr-CH",
                "value" : "Génétique médicale"
              },
              {
                "language" : "it-CH",
                "value" : "Genetica medica"
              },
              {
                "language" : "en-US",
                "value" : "Medical genetics"
              }
            ]
          },
          {
            "code" : "1044",
            "display" : "Medical oncology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinische Onkologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Oncologia medicinala"
              },
              {
                "language" : "fr-CH",
                "value" : "Oncologie médicale"
              },
              {
                "language" : "it-CH",
                "value" : "Oncologia medica"
              },
              {
                "language" : "en-US",
                "value" : "Medical oncology"
              }
            ]
          },
          {
            "code" : "1045",
            "display" : "Pharmaceutical medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pharmazeutische Medizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina farmaceutica"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine pharmaceutique"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina farmacologica"
              },
              {
                "language" : "en-US",
                "value" : "Pharmaceutical medicine"
              }
            ]
          },
          {
            "code" : "1046",
            "display" : "Forensic medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rechtsmedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina forensica"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine légale"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina legale"
              },
              {
                "language" : "en-US",
                "value" : "Forensic medicine"
              }
            ]
          },
          {
            "code" : "1047",
            "display" : "Oral surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oralchirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia orala"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie orale"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia orale"
              },
              {
                "language" : "en-US",
                "value" : "Oral surgery"
              }
            ]
          },
          {
            "code" : "1048",
            "display" : "Paradontology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Parodontologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Parodontologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Parodontologie"
              },
              {
                "language" : "it-CH",
                "value" : "Parodontologia"
              },
              {
                "language" : "en-US",
                "value" : "Paradontology"
              }
            ]
          },
          {
            "code" : "1049",
            "display" : "Reconstructive dentistry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rekonstruktive Zahnmedizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Odontologia reconstructiva"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine dentaire reconstructive"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina dentaria riconstruttiva"
              },
              {
                "language" : "en-US",
                "value" : "Reconstructive dentistry"
              }
            ]
          },
          {
            "code" : "1050",
            "display" : "Other",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Andere"
              },
              {
                "language" : "rm-CH",
                "value" : "Auter"
              },
              {
                "language" : "fr-CH",
                "value" : "Autre"
              },
              {
                "language" : "it-CH",
                "value" : "Altre"
              },
              {
                "language" : "en-US",
                "value" : "Other"
              }
            ]
          },
          {
            "code" : "1051",
            "display" : "General Internal medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Allgemeine Innere Medizin"
              },
              {
                "language" : "rm-CH",
                "value" : "Medischina interna generala"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecine interne générale"
              },
              {
                "language" : "it-CH",
                "value" : "Medicina interna generale"
              },
              {
                "language" : "en-US",
                "value" : "General internal medicine"
              }
            ]
          },
          {
            "code" : "1052",
            "display" : "Community pharmacy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Offizinpharmazie"
              },
              {
                "language" : "rm-CH",
                "value" : "Farmazia d'ufficina"
              },
              {
                "language" : "fr-CH",
                "value" : "Pharmacie d'officine"
              },
              {
                "language" : "it-CH",
                "value" : "Farmacia d'officina"
              },
              {
                "language" : "en-US",
                "value" : "Community pharmacy"
              }
            ]
          },
          {
            "code" : "1053",
            "display" : "Hospital pharmacy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spitalpharmazie"
              },
              {
                "language" : "rm-CH",
                "value" : "Farmazia d'ospital"
              },
              {
                "language" : "fr-CH",
                "value" : "Pharmacie hospitalière"
              },
              {
                "language" : "it-CH",
                "value" : "Farmacia d'ospedale"
              },
              {
                "language" : "en-US",
                "value" : "Hospital pharmacy"
              }
            ]
          },
          {
            "code" : "1054",
            "display" : "Psychotherapy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychotherapie"
              },
              {
                "language" : "rm-CH",
                "value" : "Psicoterapia"
              },
              {
                "language" : "fr-CH",
                "value" : "Psychothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "Psicoterapia"
              },
              {
                "language" : "en-US",
                "value" : "Psychotherapy"
              }
            ]
          },
          {
            "code" : "1055",
            "display" : "Child and adolescent psychology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kinder- und Jugendpsychologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Psicologia d'uffants e da giuvenils"
              },
              {
                "language" : "fr-CH",
                "value" : "psychologie des enfants et des adolescents"
              },
              {
                "language" : "it-CH",
                "value" : "psicologia dell'età evolutiva"
              },
              {
                "language" : "en-US",
                "value" : "Child and adolescent psychology"
              }
            ]
          },
          {
            "code" : "1056",
            "display" : "Clinical psychology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Klinische Psychologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Psicologia clinica"
              },
              {
                "language" : "fr-CH",
                "value" : "psychologie clinique"
              },
              {
                "language" : "it-CH",
                "value" : "psicologia clinica"
              },
              {
                "language" : "en-US",
                "value" : "Clinical psychology"
              }
            ]
          },
          {
            "code" : "1057",
            "display" : "Neuropsychology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neuropsychologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Neuropsicologia"
              },
              {
                "language" : "fr-CH",
                "value" : "Neuropsychologie"
              },
              {
                "language" : "it-CH",
                "value" : "Neuropsicologia"
              },
              {
                "language" : "en-US",
                "value" : "Neuropsychology"
              }
            ]
          },
          {
            "code" : "1058",
            "display" : "Health psychology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesundheitspsychologie"
              },
              {
                "language" : "rm-CH",
                "value" : "Psicologia da sanadad"
              },
              {
                "language" : "fr-CH",
                "value" : "Psychologie de la santé"
              },
              {
                "language" : "it-CH",
                "value" : "Psicologia della salute"
              },
              {
                "language" : "en-US",
                "value" : "Health psychology"
              }
            ]
          },
          {
            "code" : "1059",
            "display" : "Hand surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Handchirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia dal maun"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie de la main"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia della mano"
              },
              {
                "language" : "en-US",
                "value" : "Hand surgery"
              }
            ]
          },
          {
            "code" : "1060",
            "display" : "Vascular surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gefässchirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia vasculara"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie vasculaire"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia vascolare"
              },
              {
                "language" : "en-US",
                "value" : "Vascular surgery"
              }
            ]
          },
          {
            "code" : "1061",
            "display" : "Thoracic surgery",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Thoraxchirurgie"
              },
              {
                "language" : "rm-CH",
                "value" : "Chirurgia dal torax"
              },
              {
                "language" : "fr-CH",
                "value" : "Chirurgie thoracique"
              },
              {
                "language" : "it-CH",
                "value" : "Chirurgia toracica"
              },
              {
                "language" : "en-US",
                "value" : "Thoracic surgery"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
