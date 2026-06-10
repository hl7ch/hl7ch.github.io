# CH VACD Target disease and illnesses undergone for immunization - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Target disease and illnesses undergone for immunization**

## ValueSet: CH VACD Target disease and illnesses undergone for immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:ChVacdTargetDiseasesAndIllnessesUndergoneForImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
This valueset contains all entries defining target deseases or illnesses undergone for immunization reasons. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "version" : "3.4.0",
  "name" : "ChVacdTargetDiseasesAndIllnessesUndergoneForImmunization",
  "title" : "CH VACD Target disease and illnesses undergone for immunization",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T09:49:50+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This valueset contains all entries defining target deseases or illnesses undergone for immunization reasons.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "34014006",
        "display" : "Viral disease (disorder)"
      },
      {
        "code" : "87628006",
        "display" : "Bacterial infectious disease (disorder)"
      },
      {
        "code" : "422400008",
        "display" : "Vomiting (disorder)"
      },
      {
        "code" : "38907003",
        "display" : "Varicella (disorder)"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)"
      },
      {
        "code" : "36989005",
        "display" : "Mumps (disorder)"
      },
      {
        "code" : "36653000",
        "display" : "Rubella (disorder)"
      },
      {
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)"
      },
      {
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)"
      },
      {
        "code" : "712986001",
        "display" : "Encephalitis caused by tick-borne encephalitis virus (disorder)"
      },
      {
        "code" : "16541001",
        "display" : "Yellow fever (disorder)"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)"
      },
      {
        "code" : "63650001",
        "display" : "Cholera (disorder)"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)"
      },
      {
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)"
      },
      {
        "code" : "18624000",
        "display" : "Disease caused by Rotavirus (disorder)"
      },
      {
        "code" : "14168008",
        "display" : "Rabies (disorder)"
      },
      {
        "code" : "56717001",
        "display" : "Tuberculosis (disorder)"
      },
      {
        "code" : "4834000",
        "display" : "Typhoid fever (disorder)"
      },
      {
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)"
      },
      {
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)"
      },
      {
        "code" : "52947006",
        "display" : "Japanese encephalitis virus disease (disorder)"
      },
      {
        "code" : "6142004",
        "display" : "Influenza (disorder)"
      },
      {
        "code" : "719865001",
        "display" : "Influenza caused by pandemic influenza virus (disorder)"
      },
      {
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)"
      },
      {
        "code" : "67924001",
        "display" : "Smallpox (disorder)"
      },
      {
        "code" : "359814004",
        "display" : "Monkeypox (disorder)"
      },
      {
        "code" : "240532009",
        "display" : "Human papillomavirus infection (disorder)"
      },
      {
        "code" : "4740000",
        "display" : "Herpes zoster (disorder)"
      },
      {
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)"
      },
      {
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)"
      },
      {
        "code" : "37109004",
        "display" : "Ebola virus disease (disorder)"
      },
      {
        "code" : "860805006",
        "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)"
      },
      {
        "code" : "55735004",
        "display" : "Respiratory syncytial virus infection (disorder)"
      },
      {
        "code" : "38362002",
        "display" : "Dengue (disorder)"
      },
      {
        "code" : "111852003",
        "display" : "Vaccinia (disorder)"
      },
      {
        "code" : "85904008",
        "display" : "Paratyphoid fever (disorder)"
      },
      {
        "code" : "409498004",
        "display" : "Anthrax (disorder)"
      },
      {
        "code" : "721758001",
        "display" : "Infection caused by Coxiella (disorder)"
      },
      {
        "code" : "25225006",
        "display" : "Disease caused by Adenovirus (disorder)"
      },
      {
        "code" : "721734000",
        "display" : "Infection caused by Francisella (disorder)"
      },
      {
        "code" : "77377001",
        "display" : "Leptospirosis (disorder)"
      },
      {
        "code" : "715507005",
        "display" : "Infection of central nervous system caused by Borrelia burgdorferi (disorder)"
      },
      {
        "code" : "721778009",
        "display" : "Infection caused by Junin virus (disorder)"
      },
      {
        "code" : "19265001",
        "display" : "Tularemia (disorder)"
      },
      {
        "code" : "58750007",
        "display" : "Plague (disorder)"
      },
      {
        "code" : "442438000",
        "display" : "Influenza caused by Influenza A virus (disorder)"
      },
      {
        "code" : "442696006",
        "display" : "Influenza caused by Influenza A virus subtype H1N1 (disorder)"
      },
      {
        "code" : "772810003",
        "display" : "Influenza caused by Influenza A virus subtype H3N2 (disorder)"
      },
      {
        "code" : "772828001",
        "display" : "Influenza caused by Influenza A virus subtype H5N1 (disorder)"
      },
      {
        "code" : "24662006",
        "display" : "Influenza caused by Influenza B virus (disorder)"
      },
      {
        "code" : "7180009",
        "display" : "Meningitis (disorder)"
      },
      {
        "code" : "186772009",
        "display" : "Rocky Mountain spotted fever (disorder)"
      },
      {
        "code" : "37246009",
        "display" : "Disease caused by rickettsiae (disorder)"
      },
      {
        "code" : "56038003",
        "display" : "Staphylococcal infectious disease (disorder)"
      },
      {
        "code" : "373437006",
        "display" : "Infection caused by Mycobacterium bovis (disorder)"
      },
      {
        "code" : "53648006",
        "display" : "Disease caused by Enterovirus (disorder)"
      },
      {
        "code" : "62676009",
        "display" : "Falciparum malaria (disorder)"
      },
      {
        "code" : "713456006",
        "display" : "Infection caused by Human enterovirus 71 (disorder)"
      },
      {
        "code" : "95896000",
        "display" : "Protozoan infection (disorder)"
      },
      {
        "code" : "56688005",
        "display" : "Clostridial infection (disorder)"
      },
      {
        "code" : "83436008",
        "display" : "Yersiniosis (disorder)"
      },
      {
        "code" : "58606001",
        "display" : "Primary immune deficiency disorder (disorder)"
      },
      {
        "code" : "33286000",
        "display" : "Secondary immune deficiency disorder (disorder)"
      },
      {
        "code" : "28944009",
        "display" : "Infection caused by Cytomegalovirus (disorder)"
      },
      {
        "code" : "16318001000119107",
        "display" : "Hypogammaglobulinemia due to multiple myeloma (disorder)"
      },
      {
        "code" : "165746003",
        "display" : "RhD negative (finding)"
      },
      {
        "code" : "111864006",
        "display" : "Chikungunya fever (disorder)"
      }]
    }]
  }
}

```
