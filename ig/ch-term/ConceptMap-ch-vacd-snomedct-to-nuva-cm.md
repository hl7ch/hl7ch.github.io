# ConceptMap for mapping SNOMED-CT vaccine codes to Nuva vaccine codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConceptMap for mapping SNOMED-CT vaccine codes to Nuva vaccine codes**

## ConceptMap: ConceptMap for mapping SNOMED-CT vaccine codes to Nuva vaccine codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-snomedct-to-nuva-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SnomedctToNuvaConceptMap |
| **Copyright/Legal**: CC0-1.0 | |

 
This ConceptMap maps vaccine codes from the SNOMED-CT CodeSystem to the corresponding codes in the Nuva terminology. It is generated based on the provided CSV mapping file and the SNOMED-CT CodeSystem. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-snomedct-to-nuva-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-snomedct-to-nuva-cm",
  "version" : "3.4.0",
  "name" : "SnomedctToNuvaConceptMap",
  "title" : "ConceptMap for mapping SNOMED-CT vaccine codes to Nuva vaccine codes",
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
  "description" : "This ConceptMap maps vaccine codes from the SNOMED-CT CodeSystem to the corresponding codes in the Nuva terminology. It is generated based on the provided CSV mapping file and the SNOMED-CT CodeSystem.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-snomedct-vs",
  "targetUri" : "http://smt.esante.gouv.fr/terminologie-nuva?vs",
  "group" : [{
    "source" : "http://snomed.info/sct",
    "target" : "http://smt.esante.gouv.fr/terminologie-nuva",
    "element" : [{
      "code" : "1003499009",
      "display" : "Influenza H5N1 vaccine",
      "target" : [{
        "code" : "VAC0084",
        "display" : "H5N1 pre-pandemic influenza vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1119279002",
      "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
      "target" : [{
        "code" : "VAC0084",
        "display" : "H5N1 pre-pandemic influenza vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1162629006",
      "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
      "target" : [{
        "code" : "VAC0084",
        "display" : "H5N1 pre-pandemic influenza vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1296676008",
      "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
      "target" : [{
        "code" : "VAC0101",
        "display" : "Hepatitis B vaccine, recombinant, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1304283008",
      "display" : "Hepatitis B recombinant surface antigen only vaccine product",
      "target" : [{
        "code" : "VAC0101",
        "display" : "Hepatitis B vaccine, recombinant, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1010308001",
      "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
      "target" : [{
        "code" : "VAC0102",
        "display" : "Inactivated hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1010318006",
      "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
      "target" : [{
        "code" : "VAC0102",
        "display" : "Inactivated hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836375003",
      "display" : "Hepatitis A virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0102",
        "display" : "Inactivated hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "91000221102",
      "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0102",
        "display" : "Inactivated hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1181000221105",
      "display" : "Influenza virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0110",
        "display" : "Influenza vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836377006",
      "display" : "Influenza virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0110",
        "display" : "Influenza vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1121000221106",
      "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0111",
        "display" : "Yellow fever vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836385002",
      "display" : "Yellow fever virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0111",
        "display" : "Yellow fever vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871717007",
      "display" : "Yellow fever virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0111",
        "display" : "Yellow fever vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "#428601009",
      "display" : "#428601009",
      "target" : [{
        "code" : "VAC0112",
        "display" : "Typhoid vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836390004",
      "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0112",
        "display" : "Typhoid vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1297215000",
      "display" : "Live attenuated rubella vaccine",
      "target" : [{
        "code" : "VAC0113",
        "display" : "Rubella vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836388000",
      "display" : "Rubella virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0113",
        "display" : "Rubella vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871732000",
      "display" : "Rubella virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0113",
        "display" : "Rubella vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836382004",
      "display" : "Measles morbillivirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0114",
        "display" : "Live attenuated measles vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871765008",
      "display" : "Measles vaccine",
      "target" : [{
        "code" : "VAC0114",
        "display" : "Live attenuated measles vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871766009",
      "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0114",
        "display" : "Live attenuated measles vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2241000221103",
      "display" : "Live attenuated measles, mumps, and rubella vaccine",
      "target" : [{
        "code" : "VAC0130",
        "display" : "MMR vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871831003",
      "display" : "Measles and mumps and rubella vaccine",
      "target" : [{
        "code" : "VAC0130",
        "display" : "MMR vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1131000221109",
      "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
      "target" : [{
        "code" : "VAC0131",
        "display" : "Rabies vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836393002",
      "display" : "Rabies lyssavirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0131",
        "display" : "Rabies vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871726005",
      "display" : "Rabies vaccine",
      "target" : [{
        "code" : "VAC0131",
        "display" : "Rabies vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1101000221104",
      "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0132",
        "display" : "Tetanus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2021000221101",
      "display" : "Tetanus toxoid vaccine",
      "target" : [{
        "code" : "VAC0132",
        "display" : "Tetanus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "777725002",
      "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
      "target" : [{
        "code" : "VAC0132",
        "display" : "Tetanus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "863911006",
      "display" : "Clostridium tetani antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0132",
        "display" : "Tetanus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871742003",
      "display" : "Tetanus vaccine",
      "target" : [{
        "code" : "VAC0132",
        "display" : "Tetanus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1269346004",
      "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1290624003",
      "display" : "Variola virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1290625002",
      "display" : "Variola virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836389008",
      "display" : "Vaccinia virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871727001",
      "display" : "Vaccinia virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1861000221106",
      "display" : "Bacillus Calmette-Guerin vaccine",
      "target" : [{
        "code" : "VAC0134",
        "display" : "BCG vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "319941000221104",
      "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
      "target" : [{
        "code" : "VAC0134",
        "display" : "BCG vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836402002",
      "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0134",
        "display" : "BCG vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1031000221108",
      "display" : "Human poliovirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0135",
        "display" : "Polio vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871739009",
      "display" : "Human poliovirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0135",
        "display" : "Polio vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2061000221109",
      "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
      "target" : [{
        "code" : "VAC0136",
        "display" : "DTwP - Diphtheria-Tetanus-Pertussis, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "774618008",
      "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
      "target" : [{
        "code" : "VAC0136",
        "display" : "DTwP - Diphtheria-Tetanus-Pertussis, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871878002",
      "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0138",
        "display" : "Diphtheria-Tetanus-Pertussis-Polio vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2041000221105",
      "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
      "target" : [{
        "code" : "VAC0143",
        "display" : "Haemophilus influenzae B (or Hib) vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836380007",
      "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0143",
        "display" : "Haemophilus influenzae B (or Hib) vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871764007",
      "display" : "Haemophilus influenzae type b vaccine",
      "target" : [{
        "code" : "VAC0143",
        "display" : "Haemophilus influenzae B (or Hib) vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836383009",
      "display" : "Vibrio cholerae antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0144",
        "display" : "Cholera vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "991000221105",
      "display" : "Cholera vaccine",
      "target" : [{
        "code" : "VAC0144",
        "display" : "Cholera vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836403007",
      "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0145",
        "display" : "Tick-borne encephalitis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871719005",
      "display" : "Tick-borne encephalitis virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0145",
        "display" : "Tick-borne encephalitis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1157356006",
      "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
      "target" : [{
        "code" : "VAC0147",
        "display" : "Influenza A(H1N1)2009 vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871772009",
      "display" : "Influenza H1N1 vaccine",
      "target" : [{
        "code" : "VAC0147",
        "display" : "Influenza A(H1N1)2009 vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "840564009",
      "display" : "Leptospira antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0148",
        "display" : "Leptospirosis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871866001",
      "display" : "Neisseria meningitidis serogroup C only vaccine product",
      "target" : [{
        "code" : "VAC0150",
        "display" : "Meningococcal conjugate vaccine C, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "951000221102",
      "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
      "target" : [{
        "code" : "VAC0150",
        "display" : "Meningococcal conjugate vaccine C, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871871008",
      "display" : "Meningitis A and C vaccine",
      "target" : [{
        "code" : "VAC0151",
        "display" : "Meningococcal A + C vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871873006",
      "display" : "Meningitis A, C, W135 and Y vaccine",
      "target" : [{
        "code" : "VAC0152",
        "display" : "Unconjugated meningococcal vaccine ACWY, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836498007",
      "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0153",
        "display" : "Mumps vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871737006",
      "display" : "Mumps orthorubulavirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0153",
        "display" : "Mumps vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871738001",
      "display" : "Live attenuated mumps vaccine",
      "target" : [{
        "code" : "VAC0153",
        "display" : "Mumps vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "45861000087106",
      "display" : "Plasmodium falciparum antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0154",
        "display" : "Malaria vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "840563003",
      "display" : "Dengue virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0155",
        "display" : "Dengue vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871720004",
      "display" : "Dengue virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0155",
        "display" : "Dengue vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836379009",
      "display" : "Human papillomavirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0156",
        "display" : "HPV Vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "911000221103",
      "display" : "Human papillomavirus vaccine",
      "target" : [{
        "code" : "VAC0156",
        "display" : "HPV Vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836398006",
      "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0157",
        "display" : "Pneumococcal vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "981000221107",
      "display" : "Pneumococcal vaccine",
      "target" : [{
        "code" : "VAC0157",
        "display" : "Pneumococcal vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1081000221109",
      "display" : "Live attenuated rotavirus vaccine",
      "target" : [{
        "code" : "VAC0158",
        "display" : "Rotavirus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836387005",
      "display" : "Rotavirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0158",
        "display" : "Rotavirus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871761004",
      "display" : "Rotavirus vaccine",
      "target" : [{
        "code" : "VAC0158",
        "display" : "Rotavirus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1010310004",
      "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
      "target" : [{
        "code" : "VAC0159",
        "display" : "Chickenpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1010322001",
      "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
      "target" : [{
        "code" : "VAC0159",
        "display" : "Chickenpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2221000221107",
      "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
      "target" : [{
        "code" : "VAC0160",
        "display" : "Live attenuated shingles vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871919004",
      "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
      "target" : [{
        "code" : "VAC0159",
        "display" : "Chickenpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871740006",
      "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0270",
        "display" : "Inactivated Polio vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1052328007",
      "display" : "Pneumococcal 4, 6B, 9V, 14, 18C, 19F, and 23F conjugate vaccine",
      "target" : [{
        "code" : "VAC0324",
        "display" : "Pneumococcal conjugate vaccine, 7 valent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1119220001",
      "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
      "target" : [{
        "code" : "VAC0339",
        "display" : "Pneumococcal polysaccharide vaccine 23-valent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871816007",
      "display" : "Poliomyelitis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0380",
        "display" : "T.Polio, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "775641005",
      "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
      "target" : [{
        "code" : "VAC0382",
        "display" : "Tetanus diphtheria vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871826000",
      "display" : "Diphtheria and tetanus vaccine",
      "target" : [{
        "code" : "VAC0382",
        "display" : "Tetanus diphtheria vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "971000221109",
      "display" : "Live attenuated Salmonella enterica subspecies enterica serovar Typhi antigen only vaccine product in oral dose form",
      "target" : [{
        "code" : "VAC0424",
        "display" : "Live attenuated oral typhoid vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2091000221104",
      "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
      "target" : [{
        "code" : "VAC0506",
        "display" : "Pentavalent DTaPHibIPV vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871888001",
      "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0506",
        "display" : "Pentavalent DTaPHibIPV vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "37146000",
      "display" : "Typhus vaccine",
      "target" : [{
        "code" : "VAC0512",
        "display" : "Typhus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871918007",
      "display" : "Rickettsia antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0512",
        "display" : "Typhus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871838009",
      "display" : "Low dose diphtheria and inactivated poliomyelitis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0549",
        "display" : "dTIPV - Diphtheria-Tetanus-Polio, low dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2231000221105",
      "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0550",
        "display" : "Measles-Rubella vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871817003",
      "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0550",
        "display" : "Measles-Rubella vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "318351000221106",
      "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
      "target" : [{
        "code" : "VAC0551",
        "display" : "DTaPIPV vaccine, standard dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871883005",
      "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
      "target" : [{
        "code" : "VAC0551",
        "display" : "DTaPIPV vaccine, standard dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1162634005",
      "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
      "target" : [{
        "code" : "VAC0552",
        "display" : "Hexavalent vaccine DTPCaHibHepB - Diphtheria-Tetanus-Polio-Acellular Pertussis-Hib-HepB, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1162637003",
      "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0552",
        "display" : "Hexavalent vaccine DTPCaHibHepB - Diphtheria-Tetanus-Polio-Acellular Pertussis-Hib-HepB, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2101000221107",
      "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
      "target" : [{
        "code" : "VAC0552",
        "display" : "Hexavalent vaccine DTPCaHibHepB - Diphtheria-Tetanus-Polio-Acellular Pertussis-Hib-HepB, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871894009",
      "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0585",
        "display" : "TdapIPV - Diphtheria-Tetanus-Pertussis-Polio vaccine, low dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2081000221102",
      "display" : "Diphtheria toxoid, Haemophilus influenzae type b conjugate, hepatitis B surface antigen, acellular pertussis and tetanus toxoid pediatric vaccine",
      "target" : [{
        "code" : "VAC0596",
        "display" : "DTaPHibHepB pentavalent vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871886002",
      "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0599",
        "display" : "DTPerHibHepB pentavalent vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1051000221104",
      "display" : "Live attenuated poliovirus serotypes 1 and 3 vaccine in oral dose form",
      "target" : [{
        "code" : "VAC0600",
        "display" : "OPV bivalent 1-3, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871875004",
      "display" : "Diphtheria and pertussis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0601",
        "display" : "DPT Diphtheria-Pertussis-Tetanus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1297217008",
      "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
      "target" : [{
        "code" : "VAC0602",
        "display" : "DTaP - Diphtheria-Tetanus-Pertussis vaccine, standard dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2051000221107",
      "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
      "target" : [{
        "code" : "VAC0610",
        "display" : "Tdap - Diphtheria-Tetanus-Pertussis vaccine, low dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "462321000124107",
      "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
      "target" : [{
        "code" : "VAC0610",
        "display" : "Tdap - Diphtheria-Tetanus-Pertussis vaccine, low dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1252703004",
      "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0623",
        "display" : "Measles-mumps vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1971000221105",
      "display" : "Meningococcus A, C, W135 and Y capsular polysaccharide conjugated vaccine",
      "target" : [{
        "code" : "VAC0643",
        "display" : "Meningococcal ACWY conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871916006",
      "display" : "Neisseria meningitidis serogroup A, C, W135 and Y capsular oligosaccharide conjugated antigens only vaccine product",
      "target" : [{
        "code" : "VAC0643",
        "display" : "Meningococcal ACWY conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1119305005",
      "display" : "2019 novel coronavirus antigen vaccine",
      "target" : [{
        "code" : "VAC0648",
        "display" : "COVID-19 vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "28531000087107",
      "display" : "COVID-19 vaccine",
      "target" : [{
        "code" : "VAC0648",
        "display" : "COVID-19 vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1296753004",
      "display" : "Paediatric vaccine inactivated whole Hepatitis A and Hepatitis B surface antigens only vaccine product",
      "target" : [{
        "code" : "VAC0653",
        "display" : "Hepatitis A + Hepatitis B vaccine Child, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836381006",
      "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0655",
        "display" : "Diphtheria vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871729003",
      "display" : "Corynebacterium diphtheriae antigen only vaccine product",
      "target" : [{
        "code" : "VAC0655",
        "display" : "Diphtheria vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871830002",
      "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0655",
        "display" : "Diphtheria vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871804001",
      "display" : "Hepatitis A virus and Salmonella enterica subspecies enterica serovar Typhi antigens only vaccine product",
      "target" : [{
        "code" : "VAC0712",
        "display" : "Typhoid-hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2171000221104",
      "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
      "target" : [{
        "code" : "VAC0713",
        "display" : "Typhoid polysaccharide vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871755002",
      "display" : "Typhoid Vi capsular polysaccharide vaccine",
      "target" : [{
        "code" : "VAC0713",
        "display" : "Typhoid polysaccharide vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "961000221100",
      "display" : "Typhoid vaccine",
      "target" : [{
        "code" : "VAC0713",
        "display" : "Typhoid polysaccharide vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2071000221100",
      "display" : "Whole cell Bordetella pertussis and Corynebacterium diphtheriae toxoid and Clostridium tetani toxoid and Haemophilus influenzae type b capsular polysaccharide conjugated antigens only pediatric vaccine",
      "target" : [{
        "code" : "VAC0775",
        "display" : "DTwPHib, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871929006",
      "display" : "Clostridium tetani and Corynebacterium diphtheriae and Hepatitis B virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0790",
        "display" : "Diphtheria-Tetanus-Hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871895005",
      "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
      "target" : [{
        "code" : "VAC0791",
        "display" : "Hexavalent vaccine DTPerHibPHepB - Diphtheria-Tetanus-Pertussis-Polio-Hib-Hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871891001",
      "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Hepatitis B and inactivated whole Human poliovirus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0792",
        "display" : "Diphtheria-Tetanus-Pertussis-Polio-Hepatitis B pentavalent vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "601000221108",
      "display" : "Bordetella pertussis antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0796",
        "display" : "Pertussis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871758000",
      "display" : "Pertussis vaccine",
      "target" : [{
        "code" : "VAC0796",
        "display" : "Pertussis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871759008",
      "display" : "Acellular Bordetella pertussis only vaccine product",
      "target" : [{
        "code" : "VAC0796",
        "display" : "Pertussis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871876003",
      "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0797",
        "display" : "Diph-T-aP/ap, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836500008",
      "display" : "Haemophilus influenzae type b and Neisseria meningitidis serogroup C antigens only vaccine product",
      "target" : [{
        "code" : "VAC0798",
        "display" : "Hib-MeningoC vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871839001",
      "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
      "target" : [{
        "code" : "VAC0800",
        "display" : "Diphtheria-tetanus-pertussis-Hib vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871806004",
      "display" : "Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0801",
        "display" : "HepB-Hib, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836384003",
      "display" : "Bacillus anthracis antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0804",
        "display" : "Anthrax vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1119351006",
      "display" : "Haemophilus influenzae type b and Neisseria meningitidis serogroup C and Y antigens only vaccine product",
      "target" : [{
        "code" : "VAC0808",
        "display" : "Hib-MenCY, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1061000221102",
      "display" : "Neisseria meningitidis capsular polysaccharide antigen-only vaccine product",
      "target" : [{
        "code" : "VAC0810",
        "display" : "Meningococcal polyvalent polysaccharide vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1981000221108",
      "display" : "Meningococcus serogroup B vaccine",
      "target" : [{
        "code" : "VAC0811",
        "display" : "Meningococcal B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "840549009",
      "display" : "Yersinia pestis antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0812",
        "display" : "Inactivated whole plague vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1801000221105",
      "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
      "target" : [{
        "code" : "VAC0814",
        "display" : "Pneumococcal conjugate vaccine, serotypes unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871725009",
      "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0819",
        "display" : "Inactivated Japanese Encephalitis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871825001",
      "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
      "target" : [{
        "code" : "VAC0819",
        "display" : "Inactivated Japanese Encephalitis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1010313002",
      "display" : "Live attenuated Influenza virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0822",
        "display" : "Influenza vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "121000221105",
      "display" : "Inactivated hepatitis A and hepatitis B surface antigen vaccine",
      "target" : [{
        "code" : "VAC0825",
        "display" : "Combined hepatitis A and hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871803007",
      "display" : "Hepatitis A and Hepatitis B virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0825",
        "display" : "Combined hepatitis A and hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2251000221101",
      "display" : "Live attenuated measles and mumps and rubella and varicella-zoster vaccine",
      "target" : [{
        "code" : "VAC0827",
        "display" : "MMRV - Measles-Mumps-Rubella-Varicella vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871908002",
      "display" : "Human alphaherpesvirus 3 and Measles morbillivirus and Mumps orthorubulavirus and Rubella virus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0827",
        "display" : "MMRV - Measles-Mumps-Rubella-Varicella vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1290764006",
      "display" : "Vaccine product containing only Human-bovine reassortant Rotavirus G1, G2, G3, G4, and P1A[8] antigens",
      "target" : [{
        "code" : "VAC0828",
        "display" : "Rotavirus pentavalent vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "45891000087103",
      "display" : "Live attenuated Zaire ebolavirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0831",
        "display" : "Ebola vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836421005",
      "display" : "Ebolavirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0831",
        "display" : "Ebola vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871721000",
      "display" : "Ebolavirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0831",
        "display" : "Ebola vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836495005",
      "display" : "Human alphaherpesvirus 3 antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0832",
        "display" : "Herpes Simplex vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "840551008",
      "display" : "Francisella tularensis antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0849",
        "display" : "Tularemia vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871716003",
      "display" : "Tularemia vaccine",
      "target" : [{
        "code" : "VAC0849",
        "display" : "Tularemia vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871837004",
      "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0855",
        "display" : "Diphtheria-Tetanus-Polio vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "318341000221109",
      "display" : "Diphtheria toxoid and Haemophilus influenzae type b conjugate and acellular pertussis and tetanus toxoid pediatric vaccine",
      "target" : [{
        "code" : "VAC0856",
        "display" : "DTaPHib vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1156879008",
      "display" : "Diphtheria and hepatitis B and pertussis and tetanus vaccine",
      "target" : [{
        "code" : "VAC0857",
        "display" : "Diphtheria-Tetanus-Pertussis-Hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1991000221106",
      "display" : "Human papillomavirus 16 and 18 vaccine",
      "target" : [{
        "code" : "VAC0858",
        "display" : "HPV vaccine bivalent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2001000221108",
      "display" : "Human papillomavirus 6, 11, 16 and 18 antigens only vaccine product",
      "target" : [{
        "code" : "VAC0859",
        "display" : "HPV vaccine quadrivalent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "#871767000",
      "display" : "#871767000",
      "target" : [{
        "code" : "VAC0860",
        "display" : "HPV vaccine nonavalent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1209197008",
      "display" : "Human papillomavirus 6, 11, 16, 18, 31, 33, 45, 52 and 58 antigens only vaccine product",
      "target" : [{
        "code" : "VAC0860",
        "display" : "HPV vaccine nonavalent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "52821000087108",
      "display" : "Neisseria meningitidis serogroup A capsular polysaccharide conjugated antigen only vaccine product",
      "target" : [{
        "code" : "VAC0866",
        "display" : "Meningococcal conjugate vaccine A, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871887006",
      "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
      "target" : [{
        "code" : "VAC0880",
        "display" : "Pentavalent Diphtheria-Tetanus-Pertussis-Hib-Polio (DTPerHibIPV) vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836400005",
      "display" : "Adenovirus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0894",
        "display" : "Adenovirus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871722007",
      "display" : "Adenovirus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0894",
        "display" : "Adenovirus vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836397001",
      "display" : "Coxiella burnetii antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0896",
        "display" : "Q fever vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871723002",
      "display" : "Coxiella burnetii antigen only vaccine product",
      "target" : [{
        "code" : "VAC0896",
        "display" : "Q fever vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871750007",
      "display" : "Hepatitis A virus antigen only paediatric vaccine product",
      "target" : [{
        "code" : "VAC0912",
        "display" : "Hepatitis A vaccine, pediatric dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1296864005",
      "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
      "target" : [{
        "code" : "VAC0914",
        "display" : "Hepatitis B vaccine, monovalent, pediatric dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1296677004",
      "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
      "target" : [{
        "code" : "VAC0915",
        "display" : "Hepatitis B vaccine, monovalent, adult dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2031000221103",
      "display" : "Adult diphtheria and tetanus toxoids vaccine",
      "target" : [{
        "code" : "VAC0920",
        "display" : "Diphtheria-tetanus Td vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871827009",
      "display" : "Low dose diphtheria and tetanus vaccine",
      "target" : [{
        "code" : "VAC0920",
        "display" : "Diphtheria-tetanus Td vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836378001",
      "display" : "Japanese encephalitis virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0921",
        "display" : "Japanese encephalitis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871724008",
      "display" : "Japanese encephalitis virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC0921",
        "display" : "Japanese encephalitis vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "409568008",
      "display" : "Pentavalent botulinum toxoid vaccine",
      "target" : [{
        "code" : "VAC0937",
        "display" : "Botulism vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1001000221103",
      "display" : "Inactivated cholera vaccine in oral dose form",
      "target" : [{
        "code" : "VAC0944",
        "display" : "Inactivated whole virion oral cholera vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2181000221101",
      "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
      "target" : [{
        "code" : "VAC0944",
        "display" : "Inactivated whole virion oral cholera vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836401009",
      "display" : "Neisseria meningitidis antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC0945",
        "display" : "Meningococcal vaccine serogroup unknown, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "921000221108",
      "display" : "Neisseria meningitidis antigen only vaccine product",
      "target" : [{
        "code" : "VAC0945",
        "display" : "Meningococcal vaccine serogroup unknown, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "#1119254000",
      "display" : "#1119254000",
      "target" : [{
        "code" : "VAC0997",
        "display" : "Pneumococcal 13-valent conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "51451000087105",
      "display" : "Pneumococcal 13-valent conjugate vaccine",
      "target" : [{
        "code" : "VAC0997",
        "display" : "Pneumococcal 13-valent conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1287338003",
      "display" : "Tick-borne encephalitis virus antigen only paediatric vaccine product",
      "target" : [{
        "code" : "VAC1037",
        "display" : "Tick-borne encephalitis vaccine, Neudörfl strain, paediatric dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1119349007",
      "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
      "target" : [{
        "code" : "VAC1041",
        "display" : "COVID-19 mRNA vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "840599008",
      "display" : "Borrelia burgdorferi antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC1073",
        "display" : "Lyme disease vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871911001",
      "display" : "Borrelia burgdorferi antigen only vaccine product",
      "target" : [{
        "code" : "VAC1073",
        "display" : "Lyme disease vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "860818003",
      "display" : "Bacillus anthracis antigen only vaccine product",
      "target" : [{
        "code" : "VAC1075",
        "display" : "Acellular anthrax vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "30141000087107",
      "display" : "COVID-19 virus-like particle antigen vaccine",
      "target" : [{
        "code" : "VAC1106",
        "display" : "COVID-19 VLP vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1162643001",
      "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
      "target" : [{
        "code" : "VAC1113",
        "display" : "COVID-19 protein subunit vaccine, recombinant spike protein, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1287595003",
      "display" : "Pediatric vaccine product containing only severe acute respiratory syndrome coronavirus 2 encoding B lineage spike protein and BA.4/BA.5 lineage spike protein messenger ribonucleic acid",
      "target" : [{
        "code" : "VAC1117",
        "display" : "COVID-19 bivalent mRNA vaccine against the original virus and the Omicron BA.4/5 variant, 5 micrograms, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "51591000087104",
      "display" : "Vaccine product containing only Enterovirus A71 antigen",
      "target" : [{
        "code" : "VAC1118",
        "display" : "Enterovirus A71 vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "836374004",
      "display" : "Hepatitis B virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC1125",
        "display" : "Hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871822003",
      "display" : "Hepatitis B virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC1125",
        "display" : "Hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871925000",
      "display" : "Hepatitis B surface antigen vaccine",
      "target" : [{
        "code" : "VAC1125",
        "display" : "Hepatitis B vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1187593009",
      "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
      "target" : [{
        "code" : "VAC1128",
        "display" : "COVID-19 plasmid DNA vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1111000221101",
      "display" : "Live attenuated Argentinian haemorrhagic fever vaccine",
      "target" : [{
        "code" : "VAC1134",
        "display" : "Live attenuated vaccine against Argentine hemorrhagic fever, Junin virus, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1287596002",
      "display" : "Adult vaccine product containing only severe acute respiratory syndrome coronavirus 2 encoding B lineage spike protein and BA.4/BA.5 lineage spike protein messenger ribonucleic acid",
      "target" : [{
        "code" : "VAC1140",
        "display" : "COVID-19 bivalent mRNA vaccine against the original virus and the Omicron BA.4/5 variant, 25 micrograms, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "29061000087103",
      "display" : "COVID-19 non-replicating viral vector vaccine",
      "target" : [{
        "code" : "VAC1143",
        "display" : "COVID-19 vaccine with non-replicating viral vector, adenovirus encoding the spike protein of SARS-CoV-2, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1296678009",
      "display" : "3 antigen Hepatitis B recombinant surface only vaccine product",
      "target" : [{
        "code" : "VAC1145",
        "display" : "Recombinant hepatitis B vaccine, three antigens, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1011000221100",
      "display" : "Live attenuated Vibrio cholerae antigen only vaccine product in oral dose form",
      "target" : [{
        "code" : "VAC1149",
        "display" : "Oral live attenuated cholera vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1293025000",
      "display" : "Modified Vaccinia virus Ankara antigen only vaccine product",
      "target" : [{
        "code" : "VAC1157",
        "display" : "3rd generation smallpox vaccine, modified Ankara vaccinia virus, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1252709000",
      "display" : "Pneumococcal 1, 3, 4, 5, 6A, 6B, 7F, 8, 9V, 10A, 11A, 12F, 14, 15B, 18C, 19A, 19F, 22F, 23F, 33F conjugate vaccine",
      "target" : [{
        "code" : "VAC1163",
        "display" : "20-valent Pneumococcus conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871730008",
      "display" : "Low dose diphtheria vaccine",
      "target" : [{
        "code" : "VAC1172",
        "display" : "Diphtheria toxoid, reduced dose, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1345036005",
      "display" : "Vaccine product containing only live attenuated Chikungunya virus antigen",
      "target" : [{
        "code" : "VAC1198",
        "display" : "Chinkungunya vaccine, live attenuated, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1362134008",
      "display" : "Inactivated whole Vibrio cholerae and Vibrio cholerae recombinant toxin B subunit antigens only vaccine product in oral dose form",
      "target" : [{
        "code" : "VAC1213",
        "display" : "Cholera vaccine containing recombinant cholera toxin B subunit and inactivated whole V. cholerae O1 bacteria, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1052330009",
      "display" : "Pneumococcal 10-valent conjugate vaccine",
      "target" : [{
        "code" : "VAC1233",
        "display" : "10-valent Pneumococcus conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1252708008",
      "display" : "Pneumococcal 1, 3, 4, 5, 6A, 6B, 7F, 9V, 14, 18C, 19A, 19F, 22F, 23F, and 33F conjugate vaccine",
      "target" : [{
        "code" : "VAC1239",
        "display" : "15-valent Pneumococcus conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1156183006",
      "display" : "Recombinant Varicella-zoster glycoprotein E vaccine",
      "target" : [{
        "code" : "VAC1241",
        "display" : "Shingles vaccine, varicella-zoster virus (VZV) surface glycoprotein E (gE), unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "865997008",
      "display" : "Hepatitis A virus antigen only adult vaccine product",
      "target" : [{
        "code" : "VAC1247",
        "display" : "Hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871751006",
      "display" : "Hepatitis A virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC1247",
        "display" : "Hepatitis A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1345042009",
      "display" : "Chikungunya virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC1277",
        "display" : "Vaccine against chikungunya, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1345202008",
      "display" : "Chikungunya virus antigen only vaccine product",
      "target" : [{
        "code" : "VAC1277",
        "display" : "Vaccine against chikungunya, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1360050007",
      "display" : "Pneumococcal 3, 6A, 7F, 8, 9N, 10A, 11A, 12F, 15A, deOAc15B (de-O-acetylated 15B), 16F, 17F, 19A, 20A, 22F, 23A, 23B, 24F, 31, 33F, 35B conjugate vaccine",
      "target" : [{
        "code" : "VAC1280",
        "display" : "21-valent pneumococcal conjugate vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1287964002",
      "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
      "target" : [{
        "code" : "VAC1421",
        "display" : "COVID-19 vaccine, mRNA encoding the SARS-CoV-2 spike protein, original virus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "51311000087100",
      "display" : "RSV (respiratory syncytial virus) vaccine",
      "target" : [{
        "code" : "VAC1431",
        "display" : "RSV vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "860722004",
      "display" : "Junin virus antigen-containing vaccine product",
      "target" : [{
        "code" : "VAC1432",
        "display" : "Argentine hemorrhagic fever vaccine, Junin virus, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "871718002",
      "display" : "Plague vaccine",
      "target" : [{
        "code" : "VAC1433",
        "display" : "Plague vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "1252690003",
      "display" : "Meningococcus serogroup A vaccine",
      "target" : [{
        "code" : "VAC1434",
        "display" : "Meningococcal A vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2191000221103",
      "display" : "Inactivated rabies vaccine grown in cellular line",
      "target" : [{
        "code" : "VAC1435",
        "display" : "Rabies vaccine, inactivated, whole virion, cell culture-based, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "2201000221100",
      "display" : "Inactivated rabies virus vaccine grown in brain tissue",
      "target" : [{
        "code" : "VAC1436",
        "display" : "Rabies vaccine, inactivated, whole virion, prepared from animal brain tissue infected with rabies virus, unspecified",
        "equivalence" : "equal"
      }]
    }]
  }]
}

```
