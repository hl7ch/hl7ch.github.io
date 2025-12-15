# DocumentEntry.practiceSettingCode - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.practiceSettingCode**

## ValueSet: DocumentEntry.practiceSettingCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.practiceSettingCode | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DocumentEntryPracticeSettingCode |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.18 (use: official, ) | |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Medical specialisation of the data captured in the document as per Annex 3; EPRO-FDHA. This attribute assigns the contents of a document to a medical specialisation. It is conceivable that this information will assist the patient with setting or changing the confidentiality level of documents, which is relevant for controlling access. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.practiceSettingCode) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "DocumentEntry.practiceSettingCode",
  "meta" : {
    "lastUpdated" : "2024-06-07T11:16:07Z",
    "source" : "https://art-decor.org/fhir/4.0/ch-epr-",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2024-05-31T15:49:39+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.practiceSettingCode",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.18"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntryPracticeSettingCode",
  "title" : "DocumentEntry.practiceSettingCode",
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
  "description" : "Medical specialisation of the data captured in the document as per Annex 3; EPRO-FDHA.       This attribute assigns the contents of a document to a medical specialisation. It is conceivable that this information will assist the patient with setting or changing the confidentiality level of documents, which is relevant for controlling access.",
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
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "408470005",
            "display" : "Obstetrics (qualifier value)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Obstetrics"
              },
              {
                "language" : "de-CH",
                "value" : "Geburtshilfe"
              },
              {
                "language" : "fr-CH",
                "value" : "obstétrique"
              },
              {
                "language" : "it-CH",
                "value" : "ostetricia"
              },
              {
                "language" : "rm-CH",
                "value" : "assistenza al part"
              }
            ]
          },
          {
            "code" : "722163006",
            "display" : "Dentistry (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zahnmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "dentisterie"
              },
              {
                "language" : "it-CH",
                "value" : "odontoiatria"
              },
              {
                "language" : "en-US",
                "value" : "Dentistry"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina da dents"
              }
            ]
          },
          {
            "code" : "773568002",
            "display" : "Emergency medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfallmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine d'urgence"
              },
              {
                "language" : "it-CH",
                "value" : "medicina d'urgenza"
              },
              {
                "language" : "en-US",
                "value" : "Emergency medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina d'urgenza"
              }
            ]
          },
          {
            "code" : "408463005",
            "display" : "Vascular surgery (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gefässchirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie vasculaire"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia vascolare"
              },
              {
                "language" : "en-US",
                "value" : "Vascular surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia vasculara"
              }
            ]
          },
          {
            "code" : "394805004",
            "display" : "Clinical immunology/allergy (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunologie/Allergologie"
              },
              {
                "language" : "fr-CH",
                "value" : "immunologie/allergologie"
              },
              {
                "language" : "it-CH",
                "value" : "allergologia e immunologia clinica"
              },
              {
                "language" : "en-US",
                "value" : "Clinical immunology/allergy"
              },
              {
                "language" : "rm-CH",
                "value" : "immunologia/allergologia"
              }
            ]
          },
          {
            "code" : "394802001",
            "display" : "General medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Allgemeinmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine générale"
              },
              {
                "language" : "it-CH",
                "value" : "medicina generale"
              },
              {
                "language" : "en-US",
                "value" : "General medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina generala"
              }
            ]
          },
          {
            "code" : "394577000",
            "display" : "Anesthetics (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anästhesiologie"
              },
              {
                "language" : "fr-CH",
                "value" : "anesthésiologie"
              },
              {
                "language" : "it-CH",
                "value" : "anestesiologia"
              },
              {
                "language" : "en-US",
                "value" : "Anaesthesiology"
              },
              {
                "language" : "rm-CH",
                "value" : "anestesiologia"
              }
            ]
          },
          {
            "code" : "722414000",
            "display" : "Vascular medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Angiologie"
              },
              {
                "language" : "fr-CH",
                "value" : "angiologie"
              },
              {
                "language" : "it-CH",
                "value" : "angiologia"
              },
              {
                "language" : "en-US",
                "value" : "Vascular medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "angiologia"
              }
            ]
          },
          {
            "code" : "722170006",
            "display" : "Chiropractic service (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chiropraktik"
              },
              {
                "language" : "fr-CH",
                "value" : "chiropractie"
              },
              {
                "language" : "it-CH",
                "value" : "chiropratica"
              },
              {
                "language" : "en-US",
                "value" : "Chiropractic service"
              },
              {
                "language" : "rm-CH",
                "value" : "chiropratica"
              }
            ]
          },
          {
            "code" : "394609007",
            "display" : "General surgery (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia"
              },
              {
                "language" : "en-US",
                "value" : "General surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia"
              }
            ]
          },
          {
            "code" : "394582007",
            "display" : "Dermatology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dermatologie und Venerologie"
              },
              {
                "language" : "fr-CH",
                "value" : "dermatologie et vénérologie"
              },
              {
                "language" : "it-CH",
                "value" : "dermatologia e venereologia"
              },
              {
                "language" : "en-US",
                "value" : "Dermatology"
              },
              {
                "language" : "rm-CH",
                "value" : "dermatologia e venerologia"
              }
            ]
          },
          {
            "code" : "394583002",
            "display" : "Endocrinology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Endokrinologie/Diabetologie"
              },
              {
                "language" : "fr-CH",
                "value" : "endocrinologie/diabétologie"
              },
              {
                "language" : "it-CH",
                "value" : "endocrinologia/diabetologia"
              },
              {
                "language" : "en-US",
                "value" : "Endocrinology"
              },
              {
                "language" : "rm-CH",
                "value" : "endocrinologia/diabetologia"
              }
            ]
          },
          {
            "code" : "310093001",
            "display" : "Occupational therapy service (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ergotherapie"
              },
              {
                "language" : "fr-CH",
                "value" : "ergothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "ergoterapia"
              },
              {
                "language" : "en-US",
                "value" : "Occupational therapy service"
              },
              {
                "language" : "rm-CH",
                "value" : "ergoterapia"
              }
            ]
          },
          {
            "code" : "722164000",
            "display" : "Dietetics and nutrition (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ernährungsberatung"
              },
              {
                "language" : "fr-CH",
                "value" : "conseil en nutrition et diététique"
              },
              {
                "language" : "it-CH",
                "value" : "dietetica"
              },
              {
                "language" : "en-US",
                "value" : "Dietetics and nutrition"
              },
              {
                "language" : "rm-CH",
                "value" : "cussegliaziun da nutriment"
              }
            ]
          },
          {
            "code" : "394584008",
            "display" : "Gastroenterology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gastroenterologie"
              },
              {
                "language" : "fr-CH",
                "value" : "gastroentérologie"
              },
              {
                "language" : "it-CH",
                "value" : "gastroenterologia"
              },
              {
                "language" : "en-US",
                "value" : "Gastroenterology"
              },
              {
                "language" : "rm-CH",
                "value" : "gastroenterologia"
              }
            ]
          },
          {
            "code" : "394811001",
            "display" : "Geriatric medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Geriatrie"
              },
              {
                "language" : "fr-CH",
                "value" : "gériatrie"
              },
              {
                "language" : "it-CH",
                "value" : "geriatria"
              },
              {
                "language" : "en-US",
                "value" : "Geriatric medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "geriatria"
              }
            ]
          },
          {
            "code" : "394586005",
            "display" : "Gynecology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gynäkologie"
              },
              {
                "language" : "fr-CH",
                "value" : "gynécologie"
              },
              {
                "language" : "it-CH",
                "value" : "ginecologia"
              },
              {
                "language" : "en-US",
                "value" : "Gynecology"
              },
              {
                "language" : "rm-CH",
                "value" : "ginecologia"
              }
            ]
          },
          {
            "code" : "394803006",
            "display" : "Clinical hematology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hämatologie"
              },
              {
                "language" : "fr-CH",
                "value" : "hématologie"
              },
              {
                "language" : "it-CH",
                "value" : "ematologia"
              },
              {
                "language" : "en-US",
                "value" : "Clinical haematology"
              },
              {
                "language" : "rm-CH",
                "value" : "hematologia"
              }
            ]
          },
          {
            "code" : "408466002",
            "display" : "Cardiac surgery (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Herzchirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie cardiaque"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia cardiaca"
              },
              {
                "language" : "en-US",
                "value" : "Cardiac surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia dal cor"
              }
            ]
          },
          {
            "code" : "408480009",
            "display" : "Clinical immunology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunologie"
              },
              {
                "language" : "fr-CH",
                "value" : "immunologie"
              },
              {
                "language" : "it-CH",
                "value" : "immunologia"
              },
              {
                "language" : "en-US",
                "value" : "Clinical immunology"
              },
              {
                "language" : "rm-CH",
                "value" : "immunologia"
              }
            ]
          },
          {
            "code" : "394807007",
            "display" : "Infectious diseases (specialty) (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektionskrankheiten"
              },
              {
                "language" : "fr-CH",
                "value" : "maladies infectieuses"
              },
              {
                "language" : "it-CH",
                "value" : "malattia infettiva"
              },
              {
                "language" : "en-US",
                "value" : "Infectious diseases"
              },
              {
                "language" : "rm-CH",
                "value" : "malsognas infectusas"
              }
            ]
          },
          {
            "code" : "419192003",
            "display" : "Internal medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Innere Medizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine interne"
              },
              {
                "language" : "it-CH",
                "value" : "medicina interna"
              },
              {
                "language" : "en-US",
                "value" : "Internal medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina interna"
              }
            ]
          },
          {
            "code" : "408478003",
            "display" : "Critical care medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intensivmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine intensive"
              },
              {
                "language" : "it-CH",
                "value" : "medicina intensiva"
              },
              {
                "language" : "en-US",
                "value" : "Critical care medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina intensiva"
              }
            ]
          },
          {
            "code" : "394579002",
            "display" : "Cardiology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kardiologie"
              },
              {
                "language" : "fr-CH",
                "value" : "cardiologie"
              },
              {
                "language" : "it-CH",
                "value" : "cardiologia"
              },
              {
                "language" : "en-US",
                "value" : "Cardiology"
              },
              {
                "language" : "rm-CH",
                "value" : "cardiologia"
              }
            ]
          },
          {
            "code" : "310025004",
            "display" : "Complementary therapy service (qualifier value)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Complementary therapy"
              },
              {
                "language" : "de-CH",
                "value" : "Komplementärmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine alternative et complémentaire"
              },
              {
                "language" : "it-CH",
                "value" : "medicina complementare"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina alternativa e cumplementara"
              }
            ]
          },
          {
            "code" : "708184003",
            "display" : "Clinical pathology service (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Labormedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecin de laboratoire"
              },
              {
                "language" : "it-CH",
                "value" : "medicina di laboratorio"
              },
              {
                "language" : "en-US",
                "value" : "Laboratory service"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina da labor"
              }
            ]
          },
          {
            "code" : "310101009",
            "display" : "Speech and language therapy service (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Logopädie"
              },
              {
                "language" : "fr-CH",
                "value" : "logopédie"
              },
              {
                "language" : "it-CH",
                "value" : "logopedia"
              },
              {
                "language" : "en-US",
                "value" : "Speech and language therapy service"
              },
              {
                "language" : "rm-CH",
                "value" : "logopedia"
              }
            ]
          },
          {
            "code" : "394580004",
            "display" : "Clinical genetics (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinische Genetik"
              },
              {
                "language" : "fr-CH",
                "value" : "génétique médicale"
              },
              {
                "language" : "it-CH",
                "value" : "genetica medica"
              },
              {
                "language" : "en-US",
                "value" : "Clinical genetics"
              },
              {
                "language" : "rm-CH",
                "value" : "genetica medicinala"
              }
            ]
          },
          {
            "code" : "408465003",
            "display" : "Oral and maxillofacial surgery (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mund-, Kiefer- und Gesichtschirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie dento-maxillo-faciale"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia oro-maxillo-facciale"
              },
              {
                "language" : "en-US",
                "value" : "Oral and maxillofacial surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia da la bucca, da la missella e da la fatscha"
              }
            ]
          },
          {
            "code" : "394589003",
            "display" : "Nephrology (qualifier value)",
            "designation" : [
              {
                "language" : "fr-CH",
                "value" : "néphrologie"
              },
              {
                "language" : "it-CH",
                "value" : "nefrologia"
              },
              {
                "language" : "en-US",
                "value" : "Nephrology"
              },
              {
                "language" : "de-CH",
                "value" : "Nephrologie"
              },
              {
                "language" : "rm-CH",
                "value" : "nefrologia"
              }
            ]
          },
          {
            "code" : "394610002",
            "display" : "Neurosurgery (qualifier value)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Neurosurgery"
              },
              {
                "language" : "de-CH",
                "value" : "Neurochirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "neurochirurgie"
              },
              {
                "language" : "it-CH",
                "value" : "neurochirurgia"
              },
              {
                "language" : "rm-CH",
                "value" : "neurochirurgia"
              }
            ]
          },
          {
            "code" : "394591006",
            "display" : "Neurology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neurologie"
              },
              {
                "language" : "fr-CH",
                "value" : "neurologie"
              },
              {
                "language" : "it-CH",
                "value" : "neurologia"
              },
              {
                "language" : "en-US",
                "value" : "Neurology"
              },
              {
                "language" : "rm-CH",
                "value" : "neurologia"
              }
            ]
          },
          {
            "code" : "394576009",
            "display" : "Accident & emergency (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfall- und Rettungsmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine d'urgence et de sauvetage"
              },
              {
                "language" : "it-CH",
                "value" : "medicina d'urgenza e di salvataggio"
              },
              {
                "language" : "en-US",
                "value" : "Accident & emergency"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina d'urgenza e da salvament"
              }
            ]
          },
          {
            "code" : "394649004",
            "display" : "Nuclear medicine - specialty (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nuklearmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine nucléaire"
              },
              {
                "language" : "it-CH",
                "value" : "medicina nucleare"
              },
              {
                "language" : "en-US",
                "value" : "Nuclear medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina nucleara"
              }
            ]
          },
          {
            "code" : "394594003",
            "display" : "Ophthalmology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ophthalmologie"
              },
              {
                "language" : "fr-CH",
                "value" : "ophtalmologie"
              },
              {
                "language" : "it-CH",
                "value" : "oftalmologia"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmology"
              },
              {
                "language" : "rm-CH",
                "value" : "oftalmologia"
              }
            ]
          },
          {
            "code" : "394801008",
            "display" : "Trauma and orthopedics (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Orthopädie und Traumatologie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie orthopédique et traumatologie de l'appareil locomoteur"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia ortopedica e traumatologia dell'apparato locomotore"
              },
              {
                "language" : "en-US",
                "value" : "Trauma and orthopedics"
              },
              {
                "language" : "rm-CH",
                "value" : "ortopedia e traumatologia"
              }
            ]
          },
          {
            "code" : "416304004",
            "display" : "Osteopathic manipulative medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Osteopathie"
              },
              {
                "language" : "fr-CH",
                "value" : "ostéopathie"
              },
              {
                "language" : "it-CH",
                "value" : "osteopatia"
              },
              {
                "language" : "en-US",
                "value" : "Osteopathic manipulative medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "osteopatia"
              }
            ]
          },
          {
            "code" : "418960008",
            "display" : "Otolaryngology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oto-Rhino-Laryngologie"
              },
              {
                "language" : "fr-CH",
                "value" : "oto-rhino-laryngologie"
              },
              {
                "language" : "it-CH",
                "value" : "otorinolaringoiatria"
              },
              {
                "language" : "en-US",
                "value" : "Otolaryngology"
              },
              {
                "language" : "rm-CH",
                "value" : "oto-rino-laringologia"
              }
            ]
          },
          {
            "code" : "394537008",
            "display" : "Pediatric specialty (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pädiatrie"
              },
              {
                "language" : "fr-CH",
                "value" : "pédiatrie"
              },
              {
                "language" : "it-CH",
                "value" : "pediatria"
              },
              {
                "language" : "en-US",
                "value" : "Pediatrics"
              },
              {
                "language" : "rm-CH",
                "value" : "pediatria"
              }
            ]
          },
          {
            "code" : "394806003",
            "display" : "Palliative medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Palliativmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine palliative"
              },
              {
                "language" : "it-CH",
                "value" : "medicina palliativa"
              },
              {
                "language" : "en-US",
                "value" : "Palliative medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina palliativa"
              }
            ]
          },
          {
            "code" : "394595002",
            "display" : "Pathology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pathologie"
              },
              {
                "language" : "fr-CH",
                "value" : "pathologie"
              },
              {
                "language" : "it-CH",
                "value" : "patologia"
              },
              {
                "language" : "en-US",
                "value" : "Pathology"
              },
              {
                "language" : "rm-CH",
                "value" : "patologia"
              }
            ]
          },
          {
            "code" : "722165004",
            "display" : "Nursing (qualifier value)",
            "designation" : [
              {
                "language" : "fr-CH",
                "value" : "soins"
              },
              {
                "language" : "it-CH",
                "value" : "cure infermieristiche"
              },
              {
                "language" : "en-US",
                "value" : "Nursing"
              },
              {
                "language" : "de-CH",
                "value" : "Pflege"
              },
              {
                "language" : "rm-CH",
                "value" : "tgira"
              }
            ]
          },
          {
            "code" : "394600006",
            "display" : "Clinical pharmacology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Klinische Pharmakologie"
              },
              {
                "language" : "fr-CH",
                "value" : "pharmacologie clinique"
              },
              {
                "language" : "it-CH",
                "value" : "farmacologia clinica"
              },
              {
                "language" : "en-US",
                "value" : "Clinical pharmacology"
              },
              {
                "language" : "rm-CH",
                "value" : "farmacologia clinica"
              }
            ]
          },
          {
            "code" : "310080006",
            "display" : "Pharmacy service (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pharmazeutische Dienstleistungen"
              },
              {
                "language" : "fr-CH",
                "value" : "service pharmaceutique"
              },
              {
                "language" : "it-CH",
                "value" : "servizio farmaceutico"
              },
              {
                "language" : "en-US",
                "value" : "Pharmacy service"
              },
              {
                "language" : "rm-CH",
                "value" : "servetsch farmaceutic"
              }
            ]
          },
          {
            "code" : "722138006",
            "display" : "Physiotherapy (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Physiotherapie"
              },
              {
                "language" : "fr-CH",
                "value" : "physiothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "fisioterapia"
              },
              {
                "language" : "en-US",
                "value" : "Physiotherapy"
              },
              {
                "language" : "rm-CH",
                "value" : "fisioterapia"
              }
            ]
          },
          {
            "code" : "394611003",
            "display" : "Plastic surgery - specialty (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Plastische, Rekonstruktive und Ästhetische Chirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie plastique, reconstructrice et esthétique"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia plastica, ricostruttiva ed estetica"
              },
              {
                "language" : "en-US",
                "value" : "Plastic surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia plastica, reconstructiva ed estetica"
              }
            ]
          },
          {
            "code" : "418112009",
            "display" : "Pulmonary medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pneumologie"
              },
              {
                "language" : "fr-CH",
                "value" : "pneumologie"
              },
              {
                "language" : "it-CH",
                "value" : "pneumologia"
              },
              {
                "language" : "en-US",
                "value" : "Pulmonary medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "pneumologia"
              }
            ]
          },
          {
            "code" : "310087009",
            "display" : "Podiatry service (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Podologie"
              },
              {
                "language" : "fr-CH",
                "value" : "podologie"
              },
              {
                "language" : "it-CH",
                "value" : "podologia"
              },
              {
                "language" : "en-US",
                "value" : "Podiatry service"
              },
              {
                "language" : "rm-CH",
                "value" : "podologia"
              }
            ]
          },
          {
            "code" : "409968004",
            "display" : "Preventive medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Präventionsmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine préventive"
              },
              {
                "language" : "it-CH",
                "value" : "prevenzione"
              },
              {
                "language" : "en-US",
                "value" : "Preventive medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina preventiva"
              }
            ]
          },
          {
            "code" : "394587001",
            "display" : "Psychiatry (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychiatrie und Psychotherapie"
              },
              {
                "language" : "fr-CH",
                "value" : "psychiatrie et psychothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "psichiatria e psicoterapia"
              },
              {
                "language" : "en-US",
                "value" : "Psychiatry"
              },
              {
                "language" : "rm-CH",
                "value" : "psicoterapia"
              }
            ]
          },
          {
            "code" : "722162001",
            "display" : "Psychology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychologie"
              },
              {
                "language" : "fr-CH",
                "value" : "psychologie"
              },
              {
                "language" : "it-CH",
                "value" : "psicologia"
              },
              {
                "language" : "en-US",
                "value" : "Psychology"
              },
              {
                "language" : "rm-CH",
                "value" : "psicologia"
              }
            ]
          },
          {
            "code" : "721961006",
            "display" : "Psychosomatic medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychosomatik"
              },
              {
                "language" : "fr-CH",
                "value" : "psychosomatique"
              },
              {
                "language" : "it-CH",
                "value" : "medicina psicosomatica"
              },
              {
                "language" : "en-US",
                "value" : "Psychosomatic medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina psicosomatica"
              }
            ]
          },
          {
            "code" : "394914008",
            "display" : "Radiology - specialty (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Radiologie"
              },
              {
                "language" : "fr-CH",
                "value" : "radiologie"
              },
              {
                "language" : "it-CH",
                "value" : "radiologia"
              },
              {
                "language" : "en-US",
                "value" : "Radiology"
              },
              {
                "language" : "rm-CH",
                "value" : "radiologia"
              }
            ]
          },
          {
            "code" : "419815003",
            "display" : "Radiation oncology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Radio-Onkologie"
              },
              {
                "language" : "fr-CH",
                "value" : "radio-oncologie"
              },
              {
                "language" : "it-CH",
                "value" : "radio-oncologia"
              },
              {
                "language" : "en-US",
                "value" : "Radiation oncology"
              },
              {
                "language" : "rm-CH",
                "value" : "radio-oncologia"
              }
            ]
          },
          {
            "code" : "722204007",
            "display" : "Legal medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rechtsmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine légale"
              },
              {
                "language" : "it-CH",
                "value" : "medicina legale"
              },
              {
                "language" : "en-US",
                "value" : "Legal medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina legala"
              }
            ]
          },
          {
            "code" : "394602003",
            "display" : "Rehabilitation - specialty (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rehabilitation"
              },
              {
                "language" : "fr-CH",
                "value" : "réadaptation"
              },
              {
                "language" : "it-CH",
                "value" : "riabilitazione"
              },
              {
                "language" : "en-US",
                "value" : "Rehabilitation"
              },
              {
                "language" : "rm-CH",
                "value" : "reabilitaziun"
              }
            ]
          },
          {
            "code" : "394810000",
            "display" : "Rheumatology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rheumatologie"
              },
              {
                "language" : "fr-CH",
                "value" : "rhumatologie"
              },
              {
                "language" : "it-CH",
                "value" : "reumatologia"
              },
              {
                "language" : "en-US",
                "value" : "Rheumatology"
              },
              {
                "language" : "rm-CH",
                "value" : "reumatologia"
              }
            ]
          },
          {
            "code" : "408456005",
            "display" : "Thoracic surgery (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Thoraxchirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie thoracique"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia toracica"
              },
              {
                "language" : "en-US",
                "value" : "Thoracic surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia toraxala"
              }
            ]
          },
          {
            "code" : "394819004",
            "display" : "Blood transfusion (specialty) (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Transfusionsmedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine transfusionnelle"
              },
              {
                "language" : "it-CH",
                "value" : "medicina trasfusionale"
              },
              {
                "language" : "en-US",
                "value" : "Transfusion medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "transfusiun da sang"
              }
            ]
          },
          {
            "code" : "408448007",
            "display" : "Tropical medicine (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tropen- und Reisemedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "médecine tropicale et des voyages"
              },
              {
                "language" : "it-CH",
                "value" : "medicina tropicale e di viaggio"
              },
              {
                "language" : "en-US",
                "value" : "Tropical medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina da las tropas e da viadis"
              }
            ]
          },
          {
            "code" : "394612005",
            "display" : "Urology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Urologie"
              },
              {
                "language" : "fr-CH",
                "value" : "urologie"
              },
              {
                "language" : "it-CH",
                "value" : "urologia"
              },
              {
                "language" : "en-US",
                "value" : "Urology"
              },
              {
                "language" : "rm-CH",
                "value" : "urologia"
              }
            ]
          },
          {
            "code" : "394812008",
            "display" : "Dental medicine specialties (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zahnheilkunde"
              },
              {
                "language" : "fr-CH",
                "value" : "odontologie"
              },
              {
                "language" : "it-CH",
                "value" : "odontoiatria"
              },
              {
                "language" : "en-US",
                "value" : "Dental medicine"
              },
              {
                "language" : "rm-CH",
                "value" : "medischina dentala"
              }
            ]
          },
          {
            "code" : "394592004",
            "display" : "Clinical oncology (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Onkologie"
              },
              {
                "language" : "fr-CH",
                "value" : "oncologie"
              },
              {
                "language" : "it-CH",
                "value" : "oncologia medica"
              },
              {
                "language" : "en-US",
                "value" : "Clinical oncology"
              },
              {
                "language" : "rm-CH",
                "value" : "oncologia"
              }
            ]
          },
          {
            "code" : "408477008",
            "display" : "Transplantation surgery (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Transplatationschirurgie"
              },
              {
                "language" : "fr-CH",
                "value" : "chirurgie de transplantation"
              },
              {
                "language" : "it-CH",
                "value" : "chirurgia dei trapianti"
              },
              {
                "language" : "en-US",
                "value" : "Transplant surgery"
              },
              {
                "language" : "rm-CH",
                "value" : "chirurgia da transplantaziun"
              }
            ]
          },
          {
            "code" : "394658006",
            "display" : "Clinical specialty (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Andere nicht näher spezifizierte medizinische Fachrichtung"
              },
              {
                "language" : "fr-CH",
                "value" : "autres spécialisations non spécifiées"
              },
              {
                "language" : "it-CH",
                "value" : "altre specialità mediche non meglio precisate"
              },
              {
                "language" : "en-US",
                "value" : "Other clinical specialty"
              },
              {
                "language" : "rm-CH",
                "value" : "auters secturs medicinals betg precisads"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
