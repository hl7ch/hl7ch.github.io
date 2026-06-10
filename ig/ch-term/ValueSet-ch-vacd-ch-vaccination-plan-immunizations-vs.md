# CH VACD Swiss Vaccination Plan Immunizations - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swiss Vaccination Plan Immunizations**

## ValueSet: CH VACD Swiss Vaccination Plan Immunizations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissVaccinationPlanImmunizations |
| **Copyright/Legal**: CC0-1.0 | |

 
Immunization procedures for recommendations according to the vaccination plan. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-ch-vaccination-plan-immunizations-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs",
  "version" : "3.4.0",
  "name" : "SwissVaccinationPlanImmunizations",
  "title" : "CH VACD Swiss Vaccination Plan Immunizations",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T10:00:23+00:00",
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
  "description" : "Immunization procedures for recommendations according to the vaccination plan.",
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
        "code" : "42284007",
        "display" : "Administration of vaccine product containing only live attenuated Mycobacterium bovis antigen (procedure)"
      },
      {
        "code" : "76668005",
        "display" : "Administration of vaccine product containing only Corynebacterium diphtheriae antigen (procedure)"
      },
      {
        "code" : "127787002",
        "display" : "Administration of vaccine product containing only Haemophilus influenzae type B antigen (procedure)"
      },
      {
        "code" : "243789007",
        "display" : "Administration of vaccine product containing only Hepatitis A virus antigen (procedure)"
      },
      {
        "code" : "16584000",
        "display" : "Administration of vaccine product containing only Hepatitis B virus antigen (procedure)"
      },
      {
        "code" : "86198006",
        "display" : "Administration of vaccine product containing only Influenza virus antigen (procedure)"
      },
      {
        "code" : "314759000",
        "display" : "Administration of vaccine product containing only Japanese encephalitis virus antigen (procedure)"
      },
      {
        "code" : "47435007",
        "display" : "Administration of vaccine product containing only Measles morbillivirus antigen (procedure)"
      },
      {
        "code" : "719596001",
        "display" : "Administration of vaccine product containing only Neisseria meningitidis serogroup C antigen (procedure)"
      },
      {
        "code" : "314417000",
        "display" : "Administration of vaccine product containing only Neisseria meningitidis serogroup A and C antigens (procedure)"
      },
      {
        "code" : "871874000",
        "display" : "Administration of vaccine product containing only Neisseria meningitidis serogroup A, C, W135 and Y antigens (procedure)"
      },
      {
        "code" : "50583002",
        "display" : "Administration of vaccine product containing only Mumps orthorubulavirus antigen (procedure)"
      },
      {
        "code" : "761841000",
        "display" : "Administration of vaccine product containing only Human papillomavirus antigen (procedure)"
      },
      {
        "code" : "39343008",
        "display" : "Administration of vaccine product containing only Bordetella pertussis antigen (procedure)"
      },
      {
        "code" : "1119368005",
        "display" : "Administration of vaccine product containing only Streptococcus pneumoniae Danish serotype 4, 6B, 9V, 14, 18C, 19F, and 23F capsular polysaccharide antigens conjugated (procedure)"
      },
      {
        "code" : "1119366009",
        "display" : "Administration of vaccine product containing only Streptococcus pneumoniae Danish serotype 1, 3, 4, 5, 6A, 6B, 7F, 9V, 14, 18C, 19A, 19F, and 23F capsular polysaccharide antigens (procedure)"
      },
      {
        "code" : "1119367000",
        "display" : "Administration of vaccine product containing only Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens (procedure)"
      },
      {
        "code" : "72093006",
        "display" : "Administration of vaccine product containing only Human poliovirus antigen (procedure)"
      },
      {
        "code" : "34631000",
        "display" : "Administration of vaccine product containing only Rabies lyssavirus antigen (procedure)"
      },
      {
        "code" : "82314000",
        "display" : "Administration of vaccine product containing only Rubella virus antigen (procedure)"
      },
      {
        "code" : "127786006",
        "display" : "Administration of vaccine product containing only Clostridium tetani antigen (procedure)"
      },
      {
        "code" : "281658005",
        "display" : "Administration of vaccine product containing only Tick-borne encephalitis virus antigen (procedure)"
      },
      {
        "code" : "15483003",
        "display" : "Administration of vaccine product containing only Salmonella enterica subspecies enterica serovar Typhi antigen (procedure)"
      },
      {
        "code" : "737081007",
        "display" : "Administration of vaccine product containing only Human alphaherpesvirus 3 antigen for chickenpox (procedure)"
      },
      {
        "code" : "722215002",
        "display" : "Administration of vaccine product containing only Human alphaherpesvirus 3 antigen for shingles (procedure)"
      },
      {
        "code" : "67308009",
        "display" : "Administration of vaccine product containing only Yellow fever virus antigen (procedure)"
      },
      {
        "code" : "1157107003",
        "display" : "Administration of vaccine product containing only recombinant non-replicating viral vector encoding Severe acute respiratory syndrome coronavirus 2 spike protein (procedure)"
      },
      {
        "code" : "1119350007",
        "display" : "Administration of vaccine product containing only Severe acute respiratory syndrome coronavirus 2 messenger ribonucleic acid (procedure)"
      },
      {
        "code" : "1209198003",
        "display" : "Administration of vaccine product containing only Human papillomavirus 6, 11, 16, 18, 31, 33, 45, 52 and 58 antigen (procedure)"
      },
      {
        "code" : "1162645008",
        "display" : "Administration of vaccine product containing only severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen (procedure)"
      }]
    }]
  }
}

```
