# DocumentEntry.eventCodeList - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.eventCodeList**

## ValueSet: DocumentEntry.eventCodeList 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.eventCodeList | *Version*:3.3.0 |
| Active as of 2025-12-01 | *Computable Name*:DocumentEntryEventCodeList |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.8 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
DocumentEntry.eventCodeList 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.eventCodeList) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "DocumentEntry.eventCodeList",
  "meta" : {
    "lastUpdated" : "2025-12-01T16:04:34Z",
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.8--20251201154557",
    "tag" : [
      {
        "system" : "http://hl7.org/fhir/FHIR-version",
        "code" : "4.0.1"
      }
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2025-12-01T15:45:57+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.eventCodeList",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.8"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntryEventCodeList",
  "title" : "DocumentEntry.eventCodeList",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-01T16:04:34+01:00",
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
  "description" : "DocumentEntry.eventCodeList",
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
        "system" : "http://dicom.nema.org/resources/ontology/DCM",
        "concept" : [
          {
            "code" : "TG",
            "display" : "Thermography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Thermographie"
              },
              {
                "language" : "fr-CH",
                "value" : "Thermographie"
              },
              {
                "language" : "it-CH",
                "value" : "Termografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Thermographie"
              },
              {
                "language" : "en-US",
                "value" : "Thermography"
              }
            ]
          },
          {
            "code" : "RTIMAGE",
            "display" : "RT Image",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "RT-Bild"
              },
              {
                "language" : "de-CH",
                "value" : "Radiotherapie Bild"
              },
              {
                "language" : "fr-CH",
                "value" : "Image RT"
              },
              {
                "language" : "fr-CH",
                "value" : "Image de radiothérapie"
              },
              {
                "language" : "it-CH",
                "value" : "Immagine RT"
              },
              {
                "language" : "it-CH",
                "value" : "Immagine di radioterapia"
              },
              {
                "language" : "rm-CH",
                "value" : "RT-Bild"
              },
              {
                "language" : "rm-CH",
                "value" : "Radiotherapie Bild"
              },
              {
                "language" : "en-US",
                "value" : "RT Image"
              }
            ]
          },
          {
            "code" : "RESP",
            "display" : "Respiratory Waveform",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atmungswellenform"
              },
              {
                "language" : "fr-CH",
                "value" : "Forme d'onde respiratoire"
              },
              {
                "language" : "it-CH",
                "value" : "Forma d'onda respiratoria"
              },
              {
                "language" : "rm-CH",
                "value" : "Atmungswellenform"
              },
              {
                "language" : "en-US",
                "value" : "Respiratory Waveform"
              }
            ]
          },
          {
            "code" : "POS",
            "display" : "Position Sensor",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Positionssensor"
              },
              {
                "language" : "fr-CH",
                "value" : "Capteur de position"
              },
              {
                "language" : "it-CH",
                "value" : "Sensore di posizione"
              },
              {
                "language" : "rm-CH",
                "value" : "Positionssensor"
              },
              {
                "language" : "en-US",
                "value" : "Position Sensor"
              }
            ]
          },
          {
            "code" : "PA",
            "display" : "Photoacoustic",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Photoakustik"
              },
              {
                "language" : "fr-CH",
                "value" : "Photoacoustique"
              },
              {
                "language" : "it-CH",
                "value" : "Fotoacustica"
              },
              {
                "language" : "rm-CH",
                "value" : "Photoakustik"
              },
              {
                "language" : "en-US",
                "value" : "Photoacoustic"
              }
            ]
          },
          {
            "code" : "LS",
            "display" : "Laser Scan",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Laserscan"
              },
              {
                "language" : "fr-CH",
                "value" : "Scanner laser"
              },
              {
                "language" : "it-CH",
                "value" : "Scansione laser"
              },
              {
                "language" : "rm-CH",
                "value" : "Laserscan"
              },
              {
                "language" : "en-US",
                "value" : "Laser Scan"
              }
            ]
          },
          {
            "code" : "EOG",
            "display" : "Electrooculography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Elektrookulographie"
              },
              {
                "language" : "fr-CH",
                "value" : "Électrooculographie"
              },
              {
                "language" : "it-CH",
                "value" : "Elettrooculografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Elektrookulographie"
              },
              {
                "language" : "en-US",
                "value" : "Electrooculography"
              }
            ]
          },
          {
            "code" : "EMG",
            "display" : "Electromyography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Elektromyographie"
              },
              {
                "language" : "fr-CH",
                "value" : "Électromyographie"
              },
              {
                "language" : "it-CH",
                "value" : "Elettromiografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Elektromyographie"
              },
              {
                "language" : "en-US",
                "value" : "Electromyography"
              }
            ]
          },
          {
            "code" : "EEG",
            "display" : "Electroencephalography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Elektroenzephalographie"
              },
              {
                "language" : "fr-CH",
                "value" : "Électroencéphalographie"
              },
              {
                "language" : "it-CH",
                "value" : "Elettroencefalografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Elektroenzephalographie"
              },
              {
                "language" : "en-US",
                "value" : "Electroencephalography"
              }
            ]
          },
          {
            "code" : "DMS",
            "display" : "Dermoscopy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dermatoskopie"
              },
              {
                "language" : "fr-CH",
                "value" : "Dermoscopie"
              },
              {
                "language" : "it-CH",
                "value" : "Dermoscopia"
              },
              {
                "language" : "rm-CH",
                "value" : "Dermatoskopie"
              },
              {
                "language" : "en-US",
                "value" : "Dermoscopy"
              }
            ]
          },
          {
            "code" : "DG",
            "display" : "Diaphanography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diaphanographie"
              },
              {
                "language" : "fr-CH",
                "value" : "Diaphanographie"
              },
              {
                "language" : "it-CH",
                "value" : "Diafanografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Diaphanographie"
              },
              {
                "language" : "en-US",
                "value" : "Diaphanography"
              }
            ]
          },
          {
            "code" : "CFM",
            "display" : "Confocal Microscopy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Konfokalmikroskopie"
              },
              {
                "language" : "fr-CH",
                "value" : "Microscope confocale"
              },
              {
                "language" : "it-CH",
                "value" : "Microscopia confocale"
              },
              {
                "language" : "rm-CH",
                "value" : "Konfokalmikroskopie"
              },
              {
                "language" : "en-US",
                "value" : "Confocal Microscopy"
              }
            ]
          },
          {
            "code" : "BDUS",
            "display" : "Ultrasound Bone Densitometry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ultraschall-Knochendichtemessung"
              },
              {
                "language" : "fr-CH",
                "value" : "Densitométrie osseuse par ultrasons"
              },
              {
                "language" : "it-CH",
                "value" : "Densitometria ossea a ultrasuoni"
              },
              {
                "language" : "rm-CH",
                "value" : "Ultraschall-Knochendichtemessung"
              },
              {
                "language" : "en-US",
                "value" : "Ultrasound Bone Densitometry"
              }
            ]
          },
          {
            "code" : "OPTENF",
            "display" : "Ophthalmic Tomography En Face",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ophthalmische Tomographie En Face"
              },
              {
                "language" : "fr-CH",
                "value" : "Tomographie ophtalmique en face"
              },
              {
                "language" : "it-CH",
                "value" : "Tomografia oftalmica En Face"
              },
              {
                "language" : "rm-CH",
                "value" : "Ophthalmische Tomographie En Face"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Tomography En Face"
              }
            ]
          },
          {
            "code" : "OPTBSV",
            "display" : "Ophthalmic Tomography B-scan Volume Analysis",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ophthalmologische Tomographie B-Scan Volumenanalyse"
              },
              {
                "language" : "fr-CH",
                "value" : "Analyse du volume de la tomographie ophtalmique B-scan"
              },
              {
                "language" : "it-CH",
                "value" : "Analisi del volume della scansione B della tomografia oftalmica"
              },
              {
                "language" : "rm-CH",
                "value" : "Ophthalmologische Tomographie B-Scan Volumenanalyse"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Tomography B-scan Volume Analysis"
              }
            ]
          },
          {
            "code" : "OPV",
            "display" : "Ophthalmic Visual Field",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesichtsfeld der Augen"
              },
              {
                "language" : "fr-CH",
                "value" : "Champ visuel ophtalmique"
              },
              {
                "language" : "it-CH",
                "value" : "Perimetria computerizzata"
              },
              {
                "language" : "rm-CH",
                "value" : "Gesichtsfeld der Augen"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Visual Field"
              }
            ]
          },
          {
            "code" : "DX",
            "display" : "Digital Radiography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Digitales Röntgen"
              },
              {
                "language" : "fr-CH",
                "value" : "Radiologie numérique"
              },
              {
                "language" : "it-CH",
                "value" : "Radiografia digitale"
              },
              {
                "language" : "rm-CH",
                "value" : "Digitales Röntgen"
              },
              {
                "language" : "en-US",
                "value" : "Digital Radiography"
              }
            ]
          },
          {
            "code" : "OPT",
            "display" : "Ophthalmic Tomography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Augentomografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Tomographie ophtalmique"
              },
              {
                "language" : "it-CH",
                "value" : "Tomografia ottica computerizzata"
              },
              {
                "language" : "rm-CH",
                "value" : "Augentomografie"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Tomography"
              }
            ]
          },
          {
            "code" : "BMD",
            "display" : "Bone Mineral Densitometry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Knochenmineraldensitometrie"
              },
              {
                "language" : "fr-CH",
                "value" : "Densitométrie minérale osseuse"
              },
              {
                "language" : "it-CH",
                "value" : "Mineralometria ossea computerizzata"
              },
              {
                "language" : "rm-CH",
                "value" : "Knochenmineraldensitometrie"
              },
              {
                "language" : "en-US",
                "value" : "Bone Mineral Densitometry"
              }
            ]
          },
          {
            "code" : "MG",
            "display" : "Mammography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mammografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Mammographie"
              },
              {
                "language" : "it-CH",
                "value" : "Mammografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Mammografie"
              },
              {
                "language" : "en-US",
                "value" : "Mammography"
              }
            ]
          },
          {
            "code" : "SM",
            "display" : "Slide Microscopy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Objektträger Mikroskopie"
              },
              {
                "language" : "fr-CH",
                "value" : "Microscopie avec lamelles"
              },
              {
                "language" : "it-CH",
                "value" : "Microscopia a vetrini"
              },
              {
                "language" : "rm-CH",
                "value" : "Objektträger Mikroskopie"
              },
              {
                "language" : "en-US",
                "value" : "Slide Microscopy"
              }
            ]
          },
          {
            "code" : "US",
            "display" : "Ultrasound",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ultraschall"
              },
              {
                "language" : "fr-CH",
                "value" : "Ultrason"
              },
              {
                "language" : "it-CH",
                "value" : "Ecografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Ultraschall"
              },
              {
                "language" : "en-US",
                "value" : "Ultrasound"
              }
            ]
          },
          {
            "code" : "OP",
            "display" : "Ophthalmic Photography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Augenfotografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Photographie ophtalmique"
              },
              {
                "language" : "it-CH",
                "value" : "Fotografia oftalmica"
              },
              {
                "language" : "rm-CH",
                "value" : "Augenfotografie"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Photography"
              }
            ]
          },
          {
            "code" : "IVOCT",
            "display" : "Intravascular Optical Coherence Tomography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intravaskuläre optische Kohärenztomografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Tomographie en cohérence optique intravasculaire"
              },
              {
                "language" : "it-CH",
                "value" : "Tomografia intravascolare a coerenza ottica"
              },
              {
                "language" : "rm-CH",
                "value" : "Intravaskuläre optische Kohärenztomografie"
              },
              {
                "language" : "en-US",
                "value" : "Intravascular Optical Coherence Tomography"
              }
            ]
          },
          {
            "code" : "MR",
            "display" : "Magnetic Resonance",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnetresonanz"
              },
              {
                "language" : "fr-CH",
                "value" : "Résonance magnétique"
              },
              {
                "language" : "it-CH",
                "value" : "Risonanza magnetica"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnetresonanz"
              },
              {
                "language" : "en-US",
                "value" : "Magnetic Resonance"
              }
            ]
          },
          {
            "code" : "ECG",
            "display" : "Electrocardiography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Elektrokardiografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Électrocardiographie"
              },
              {
                "language" : "it-CH",
                "value" : "Elettrocardiografia"
              },
              {
                "language" : "rm-CH",
                "value" : "Elektrokardiografie"
              },
              {
                "language" : "en-US",
                "value" : "Electrocardiography"
              }
            ]
          },
          {
            "code" : "GM",
            "display" : "General Microscopy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Allgemeine Mikroskopie"
              },
              {
                "language" : "fr-CH",
                "value" : "Microscopie générale"
              },
              {
                "language" : "it-CH",
                "value" : "Microscopia generale"
              },
              {
                "language" : "rm-CH",
                "value" : "Allgemeine Mikroskopie"
              },
              {
                "language" : "en-US",
                "value" : "General Microscopy"
              }
            ]
          },
          {
            "code" : "IO",
            "display" : "Intra-oral Radiography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intraorales Röntgen"
              },
              {
                "language" : "fr-CH",
                "value" : "Radiographie intra-orale"
              },
              {
                "language" : "it-CH",
                "value" : "Radiografia intraorale"
              },
              {
                "language" : "rm-CH",
                "value" : "Intraorales Röntgen"
              },
              {
                "language" : "en-US",
                "value" : "Intra-oral Radiography"
              }
            ]
          },
          {
            "code" : "XA",
            "display" : "X-Ray Angiography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Röntgen-Angiografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Angiographie par rayons X"
              },
              {
                "language" : "it-CH",
                "value" : "Angiografia a raggi X"
              },
              {
                "language" : "rm-CH",
                "value" : "Röntgen-Angiografie"
              },
              {
                "language" : "en-US",
                "value" : "X-Ray Angiography"
              }
            ]
          },
          {
            "code" : "XC",
            "display" : "External-camera Photography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fotografie mit externer Kamera"
              },
              {
                "language" : "fr-CH",
                "value" : "Photographie par appareil externe"
              },
              {
                "language" : "it-CH",
                "value" : "Fotografia con fotocamera esterna"
              },
              {
                "language" : "rm-CH",
                "value" : "Fotografie mit externer Kamera"
              },
              {
                "language" : "en-US",
                "value" : "External-camera Photography"
              }
            ]
          },
          {
            "code" : "VA",
            "display" : "Visual Acuity",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sehschärfe"
              },
              {
                "language" : "fr-CH",
                "value" : "Acuité visuelle"
              },
              {
                "language" : "it-CH",
                "value" : "Acutezza visiva"
              },
              {
                "language" : "rm-CH",
                "value" : "Sehschärfe"
              },
              {
                "language" : "en-US",
                "value" : "Visual Acuity"
              }
            ]
          },
          {
            "code" : "IVUS",
            "display" : "Intravascular Ultrasound",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Intravaskulärer Ultraschall"
              },
              {
                "language" : "fr-CH",
                "value" : "Ultrason intravasculaire"
              },
              {
                "language" : "it-CH",
                "value" : "Ecografia intravascolare"
              },
              {
                "language" : "rm-CH",
                "value" : "Intravaskulärer Ultraschall"
              },
              {
                "language" : "en-US",
                "value" : "Intravascular Ultrasound"
              }
            ]
          },
          {
            "code" : "CR",
            "display" : "Computed Radiography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Computerradiografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Radiographie numérique"
              },
              {
                "language" : "it-CH",
                "value" : "Radiografia computerizzata"
              },
              {
                "language" : "rm-CH",
                "value" : "Computerradiografie"
              },
              {
                "language" : "en-US",
                "value" : "Computed Radiography"
              }
            ]
          },
          {
            "code" : "ES",
            "display" : "Endoscopy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Endoskopie"
              },
              {
                "language" : "fr-CH",
                "value" : "Endoscopie"
              },
              {
                "language" : "it-CH",
                "value" : "Endoscopia"
              },
              {
                "language" : "rm-CH",
                "value" : "Endoskopie"
              },
              {
                "language" : "en-US",
                "value" : "Endoscopy"
              }
            ]
          },
          {
            "code" : "AR",
            "display" : "Autorefraction",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Autorefraktion"
              },
              {
                "language" : "fr-CH",
                "value" : "Autoréfraction"
              },
              {
                "language" : "it-CH",
                "value" : "Autorifrazione"
              },
              {
                "language" : "rm-CH",
                "value" : "Autorefraktion"
              },
              {
                "language" : "en-US",
                "value" : "Autorefraction"
              }
            ]
          },
          {
            "code" : "CT",
            "display" : "Computed Tomography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Computertomografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Tomographie numérique"
              },
              {
                "language" : "it-CH",
                "value" : "Tomografia computerizzata"
              },
              {
                "language" : "rm-CH",
                "value" : "Computertomografie"
              },
              {
                "language" : "en-US",
                "value" : "Computed Tomography"
              }
            ]
          },
          {
            "code" : "OSS",
            "display" : "Optical Surface Scanner",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Optischer Oberflächenscanner"
              },
              {
                "language" : "fr-CH",
                "value" : "Scanneur optique de surface"
              },
              {
                "language" : "it-CH",
                "value" : "Scanner ottico per superfici"
              },
              {
                "language" : "rm-CH",
                "value" : "Optischer Oberflächenscanner"
              },
              {
                "language" : "en-US",
                "value" : "Optical Surface Scanner"
              }
            ]
          },
          {
            "code" : "LEN",
            "display" : "Lensometry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Linsenmessung"
              },
              {
                "language" : "fr-CH",
                "value" : "Lensométrie"
              },
              {
                "language" : "it-CH",
                "value" : "Focometria"
              },
              {
                "language" : "rm-CH",
                "value" : "Linsenmessung"
              },
              {
                "language" : "en-US",
                "value" : "Lensometry"
              }
            ]
          },
          {
            "code" : "RG",
            "display" : "Radiographic imaging",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Röntgenbildgebung"
              },
              {
                "language" : "fr-CH",
                "value" : "Imagerie radiographique"
              },
              {
                "language" : "it-CH",
                "value" : "Imaging radiografico"
              },
              {
                "language" : "rm-CH",
                "value" : "Röntgenbildgebung"
              },
              {
                "language" : "en-US",
                "value" : "Radiographic imaging"
              }
            ]
          },
          {
            "code" : "RF",
            "display" : "Radiofluoroscopy",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Radio-Fluoroskopie"
              },
              {
                "language" : "fr-CH",
                "value" : "Radio-fluoroscopie"
              },
              {
                "language" : "it-CH",
                "value" : "Radiofluoroscopia"
              },
              {
                "language" : "rm-CH",
                "value" : "Radio-Fluoroskopie"
              },
              {
                "language" : "en-US",
                "value" : "Radiofluoroscopy"
              }
            ]
          },
          {
            "code" : "KER",
            "display" : "Keratometry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Keratometrie"
              },
              {
                "language" : "fr-CH",
                "value" : "Kératométrie"
              },
              {
                "language" : "it-CH",
                "value" : "Cheratometria"
              },
              {
                "language" : "rm-CH",
                "value" : "Keratometrie"
              },
              {
                "language" : "en-US",
                "value" : "Keratometry"
              }
            ]
          },
          {
            "code" : "HD",
            "display" : "Hemodynamic Waveform",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hämodynamische Druckkurve"
              },
              {
                "language" : "fr-CH",
                "value" : "Courbe hémodynamique"
              },
              {
                "language" : "it-CH",
                "value" : "Monitoraggio emodinamico"
              },
              {
                "language" : "rm-CH",
                "value" : "Hämodynamische Druckkurve"
              },
              {
                "language" : "en-US",
                "value" : "Hemodynamic Waveform"
              }
            ]
          },
          {
            "code" : "OAM",
            "display" : "Ophthalmic Axial Measurements",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Augenachsenmessungen"
              },
              {
                "language" : "fr-CH",
                "value" : "Mesures axiales ophtalmiques"
              },
              {
                "language" : "it-CH",
                "value" : "Misurazioni oftalmiche assiali"
              },
              {
                "language" : "rm-CH",
                "value" : "Augenachsenmessungen"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Axial Measurements"
              }
            ]
          },
          {
            "code" : "NM",
            "display" : "Nuclear Medicine",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nuklearmedizin"
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
                "language" : "rm-CH",
                "value" : "Nuklearmedizin"
              },
              {
                "language" : "en-US",
                "value" : "Nuclear Medicine"
              }
            ]
          },
          {
            "code" : "OCT",
            "display" : "Optical Coherence Tomography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Optische Kohärenztomografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Tomographie en cohérence optique"
              },
              {
                "language" : "it-CH",
                "value" : "Tomografia a coerenza ottica"
              },
              {
                "language" : "rm-CH",
                "value" : "Optische Kohärenztomografie"
              },
              {
                "language" : "en-US",
                "value" : "Optical Coherence Tomography"
              }
            ]
          },
          {
            "code" : "BDUS",
            "display" : "Ultrasound Bone Densitometry",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ultraschall-Knochendichtemessung"
              },
              {
                "language" : "fr-CH",
                "value" : "Densitométrie osseuse par ultrasons"
              },
              {
                "language" : "it-CH",
                "value" : "Densitometria ossea a ultrasuoni"
              },
              {
                "language" : "rm-CH",
                "value" : "Ultraschall-Knochendichtemessun"
              },
              {
                "language" : "en-US",
                "value" : "Ultrasound Bone Densitometry"
              }
            ]
          },
          {
            "code" : "PT",
            "display" : "Positron emission tomography",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Positronen-Emissions-Tomografie"
              },
              {
                "language" : "fr-CH",
                "value" : "Tomographie par émission de positons"
              },
              {
                "language" : "it-CH",
                "value" : "Tomografia a emissione di positroni"
              },
              {
                "language" : "rm-CH",
                "value" : "Positronen-Emissions-Tomografie"
              },
              {
                "language" : "en-US",
                "value" : "Positron emission tomography"
              }
            ]
          },
          {
            "code" : "EPS",
            "display" : "Cardiac Electrophysiology",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Herz-Elektrophysiologie"
              },
              {
                "language" : "fr-CH",
                "value" : "Électrophysiologie cardiaque"
              },
              {
                "language" : "it-CH",
                "value" : "Elettrofisiologia cardiaca"
              },
              {
                "language" : "rm-CH",
                "value" : "Herz-Elektrophysiologie"
              },
              {
                "language" : "en-US",
                "value" : "Cardiac Electrophysiology"
              }
            ]
          },
          {
            "code" : "PX",
            "display" : "Panoramic X-Ray",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Panoramaröntgen"
              },
              {
                "language" : "fr-CH",
                "value" : "Radiographie panoramique"
              },
              {
                "language" : "it-CH",
                "value" : "Radiografia panoramica"
              },
              {
                "language" : "rm-CH",
                "value" : "Panoramaröntgen"
              },
              {
                "language" : "en-US",
                "value" : "Panoramic X-Ray"
              }
            ]
          },
          {
            "code" : "SRF",
            "display" : "Subjective Refraction",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Subjektive Refraktion"
              },
              {
                "language" : "fr-CH",
                "value" : "Réfraction subjective"
              },
              {
                "language" : "it-CH",
                "value" : "Rifrazione soggettiva"
              },
              {
                "language" : "rm-CH",
                "value" : "Subjektive Refraktion"
              },
              {
                "language" : "en-US",
                "value" : "Subjective Refraction"
              }
            ]
          },
          {
            "code" : "OPM",
            "display" : "Ophthalmic Mapping",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Augenkartierung"
              },
              {
                "language" : "fr-CH",
                "value" : "Cartographie ophtalmique"
              },
              {
                "language" : "it-CH",
                "value" : "Mappatura oftalmica"
              },
              {
                "language" : "rm-CH",
                "value" : "Augenkartierung"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Mapping"
              }
            ]
          },
          {
            "code" : "OPR",
            "display" : "Ophthalmic Refraction",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Augenrefraktion"
              },
              {
                "language" : "fr-CH",
                "value" : "Réfraction ophtalmique"
              },
              {
                "language" : "it-CH",
                "value" : "Rifrazione oggettiva"
              },
              {
                "language" : "rm-CH",
                "value" : "Augenrefraktion"
              },
              {
                "language" : "en-US",
                "value" : "Ophthalmic Refraction"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
